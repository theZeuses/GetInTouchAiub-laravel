<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class varifyAdmin
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
        $type = $request->session()->get('type');
        if($type== 'Admin'){
            return $next($request);
        }
        else {
            return redirect('login/');
        }
    }
}
