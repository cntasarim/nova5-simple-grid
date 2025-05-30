<?php

namespace Cntasarim\Nova5SimpleGrid;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use Illuminate\Http\Request;

class NovaSimpleGrid extends Tool
{
    public function boot()
    {
        Nova::script('nova-simple-grid', __DIR__.'/../resources/js/tool.js');
    }

    public function menu(Request $request)
    {
        return null; // No menu item for this tool
    }

    public function renderNavigation()
    {
        return null; // Maintain compatibility or remove if not needed
    }
}