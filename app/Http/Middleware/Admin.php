<?php

namespace App\Http\Middleware;

use Closure;
use Gate;
use Illuminate\Contracts\Auth\Guard;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * 
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user() && $this->auth->user()->is_admin == true) {
            return $next($request);
        }
        return response()->view('errors.401', [], 401);
    }
}
