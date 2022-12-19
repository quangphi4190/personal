<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkDevice($device_current = null)
    {
        $device_id = apache_request_headers()['Device-Id'] ?? null;
        
    	if(!$device_current || !$device_id) return false;

        if ($device_id != $device_current) {

            die (json_encode(['error' => config('errorcode.account_logged_other_device'), 'message' => 'the account is logged on another device', 'data' => null]));
        }

        return true;
    }
}
