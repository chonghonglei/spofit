<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoachProfile;
use App\Models\TraineeProfile;
use App\Models\Facilities;
use App\Models\AddFacilitiesID;
use App\Models\BookCoach;

class TraineeProfileController extends Controller
{
    public function profile()
    {
        return view("profile");
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
            "exe" => "required"
        ]);
        $user = new TraineeProfile();
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('assets/img/faces/',$filename);
            $user->picture = $filename;
        }
        $user->picture = $request->picture;
        $user->name = $request->name;
        $user->age = $request->age;
        $user->weight = $request->weight;
        $user->height = $request->height;
        $user->gender = $request->gender;
        $user->exe = $request->exe;
        $res = $user->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }
    public function bookcoach()
    {
        $data = CoachProfile::all();
        return view("bookcoach", compact("data"));
    }
    public function booking($id)
    {
        $data = CoachProfile::findOrFail($id);
        return view("bookingcoach", compact('data'));
    }
    public function bookfacilities()
    {
        $data = Facilities::all();
        return view("bookfacilities", compact("data"));
    }
    public function bookingFacilities($id)
    {
        $data = AddFacilitiesID::all();
        return view("bookingfacilities", compact('data'));
    }
    public function bookingFacilitiesID($id)
    {
        $data = AddFacilitiesID::findOrFail($id);
        return view("bookingfacilitiesID", compact('data'));
    }
}