<?php

namespace YourVendor\NovaSimpleGrid;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaSimpleGrid extends Tool
{
    public function boot()
    {
        Nova::script('nova-simple-grid', __DIR__.'/../resources/js/tool.js');
    }

    public function renderNavigation()
    {
        return null; // Şu an için navigasyon görünümü yok
    }
}