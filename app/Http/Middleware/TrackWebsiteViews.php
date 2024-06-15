<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackWebsiteViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Incrementa le visualizzazioni del sito
        DB::table('website_views')->insert([
            'views' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $next($request);
    }
}

