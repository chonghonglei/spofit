<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoachProfile;

class CoachProfileController extends Controller
{
    public function profile()
    {
        return view("coachprofile");
    }
    public function setUpProfile(Request $request)
    {
        $request->validate([
            "picture" => "required",
            "name" => "required",
            "age" => "required",
            "weight" => "required",
            "height" => "required",
            "gender" => "required",
            "exe" => "required",
            "description" => "required"
        ]);
        $user = new CoachProfile();
        $user->picture = $request->picture;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->gender = $request->gender;
        $user->exe = $request->exe;
        $user->description = $request->description;
        $res = $user->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }
}
