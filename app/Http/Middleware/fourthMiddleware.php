<?php

namespace App\Http\Middleware;

use Closure;

class fourthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	$data = [
		['name'=>'taro','mail'=>'taro@gmail.com'],
		['name'=>'jiro','mail'=>'jiro@gmail.com'],
		['name'=>'saburo','mail'=>'saburo@gmail.com'],
	];
	$request->merge(['data'=>$data]);
        return $next($request);
    }
}
