<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Psy\Exception\ErrorException;


class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public static function isAdmin(): bool
    {

        //dd(auth()->id());
      if(auth()->guest())
          return false;
      else
          return (auth()->user()->username === 'admin');




    }

    public function handle(Request $request, Closure $next)
    {
        if(!(self::isAdmin())){
            abort(403);
        }
        return $next($request);
    }
}
