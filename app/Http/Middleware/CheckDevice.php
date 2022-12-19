<?php

namespace App\Http\Middleware;

use Closure;

class CheckDevice
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
        $user = $request->user();

        if($user){

            $device_id = apache_request_headers()['Device-Id'] ?? null;
            $device_current = $user->device_id;

            if(!$device_current || !$device_id) return $next($request);

            if ($device_id != $device_current) {

                die (json_encode(['error' => config('errorcode.the_account_is_logged_on_another_device'), 'message' => 'The account is logged on another device', 'data' => null]));
            }
        }

        return $next($request);
    }
}
