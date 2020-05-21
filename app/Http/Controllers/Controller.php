<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	    // function __construct(){
	    // 	$this.login();
	    // }
	    // function login(){
	    // 	if(Auth::guard('users')->check()){
	    // 		view()->share('users_login',Auth::users());
	    // 	}
	    // }
}
