<?php

namespace CinemaPHP\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;
use Closure;

class Admin
{
    protected $auth_admin;

    public function __construct(Guard $auth)
    {
        $this->auth_admin = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth_admin->user()->id != 1){
            Session::flash('message-error', 'Sem privilegios');
            return redirect()->route('admin');
        }
        return $next($request);
    }
}
