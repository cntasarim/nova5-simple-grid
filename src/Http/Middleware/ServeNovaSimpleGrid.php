<?php

namespace Cntasarim\Nova5SimpleGrid\Http\Middleware;

use Cntasarim\Nova5SimpleGrid\NovaSimpleGrid;

class ServeNovaSimpleGrid
{
    public function handle($request, $next)
    {
        return $next($request);
    }
}