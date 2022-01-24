<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginFacilities;
use App\Models\User;

class LoginFacilitiesController extends Controller
{
    public function loginFacilities(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'content' => 'required',
            'login_time' => 'required',
        ]);

        $login = new LoginFacilities();
        $user = new User();
        $login->no = $request->no;
        $login->content = $request->content;
        $login->login_time = $request->login_time;
        $login->save();

        return back();
    }
}
