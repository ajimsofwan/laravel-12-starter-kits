<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if ($request->session()->has('locale')) {
      app()->setLocale($request->session()->get('locale', config('app.locale')));
    }

    return $next($request);
  }
}
