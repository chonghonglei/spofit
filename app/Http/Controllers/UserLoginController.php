<?php

namespace App\Http\Controllers;

use App\Models\User_login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserLoginController extends Controller
{
    public function loginUserTime(Request $request)
    {
        $timeLog = new User_login();
        $timeLog->login_time = $request->login_time;
        $timeLog->save();
    }
}