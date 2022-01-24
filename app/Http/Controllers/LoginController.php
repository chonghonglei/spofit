<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_login;
use App\Models\LoginFacilities;

class LoginController extends Controller
{
    public function show()
    {
        $data = User_login::all();
        return view("login_list", ["members" => $data]);
    }

    public function showLogin()
    {
        $data = LoginFacilities::all();
        return view("login_facilities_schedule", ["logins" => $data]);
    }
}