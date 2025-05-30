<?php

namespace YourVendor\NovaSimpleGrid\Http\Middleware;

use YourVendor\NovaSimpleGrid\NovaSimpleGrid;

class ServeNovaSimpleGrid
{
    public function handle($request, $next)
    {
        return $next($request);
    }
}