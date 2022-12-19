<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckPermission
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
        $uri = $request->path();
        $method = $request->method();

        $roles = Auth::user()->roles;

        foreach ($roles as $key => $role) {
            $permissions = $role->permissions;

            if(sizeof($permissions) > 0 ) {
                foreach ($permissions as $key => $item) {
                    $methods = json_decode($item->method);
                    $paths = explode("\n", str_replace("\r", "", $item->path));

                    if ($item->key === '*') return $next($request);

                    if(sizeof($paths) > 0){
                        foreach ($paths as $path) {
                            $flag_path = $request->is(ltrim($path, '/'));
                            $flag_method = sizeof($methods) == 0 ? true : (in_array($method, $methods) ? true : false);

                            if ( $flag_path && $flag_method ) return $next($request);
                        }
                    }
                }
            }
        }

        // return $next($request);
        return abort(403);
    }
}
