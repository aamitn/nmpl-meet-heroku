<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Models\GlobalConfig;
use Illuminate\Support\Facades\Cache;

class TrustRequest
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
        if (!Str::contains($request->path(), ['install']))
	 {

                $model = GlobalConfig::where('key', 'PAYMENT_MODE')->first();
                $model->value = 'disabled';
                $model->save();
                Cache::forget('settings');
            }
        

        return $next($request);
    }
}
