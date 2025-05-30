<?php

namespace YourVendor\NovaSimpleGrid;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Nova'ya statik asset'leri sun
        $this->app->booted(function () {
            $this->app['router']->middleware('nova', \YourVendor\NovaSimpleGrid\Http\Middleware\ServeNovaSimpleGrid::class);
        });

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-simple-grid', __DIR__.'/../resources/js/tool.js');
        });

        // Alanlara size metodunu ekle
        Field::macro('size', function ($size) {
            return $this->withMeta(['size' => $size]);
        });
    }

    public function register()
    {
        //
    }
}