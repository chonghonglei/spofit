<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee_profile;

class ShowTraineeProfileController extends Controller
{
    function show()
    {
        $data = Trainee_profile::all();
        return view("showtraineeprofile", ["trainees" => $data]);
    }
}
