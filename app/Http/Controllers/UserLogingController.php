<?php

namespace App\Http\Controllers;

use App\Models\User_login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserLogingController extends Controller
{

    public function userlogin(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'login_time' => 'required',
        ]);

        $login = new User_login();
        $login->content = $request->content;
        $login->login_time = $request->login_time;
        $login->save();
        return back();
    }
}