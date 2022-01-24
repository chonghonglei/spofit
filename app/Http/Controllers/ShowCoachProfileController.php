<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach_profile;

class ShowCoachProfileController extends Controller
{
    function show()
    {
        $data = Coach_profile::all();
        return view("showcoachprofile", ["coaches" => $data]);
    }
}
