<?php

namespace App\Http\Middleware;

use App\Http\Controllers\BaseController;
use App\Models\Date;
use Closure;
use Illuminate\Http\Request;

class EnsureDateIsSingle
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
        $current_date = date('l jS F Y');

        if (Date::where('date', $current_date)->exists()) {
            # code...
            return redirect('invalid-date');
        }
        return $next($request);
    }
}
