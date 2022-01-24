<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookFacilities;
use App\Models\BookCoach;

class BookFacilitiesController extends Controller
{
    public function setUpBookFacilities(Request $request)
    {
        $request->validate([
            "name" => "required",
            "date" => "required",
            "phone" => "required",
            "time" => "required",
            "email" => "required|email|unique:users",
            "no" => "required"
        ]);
        $user = new BookFacilities();
        $user->name = $request->name;
        $user->date = $request->date;
        $user->phone = $request->phone;
        $user->time = $request->time;
        $user->email = $request->email;
        $user->no = $request->no;
        $res = $user->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }

    public function show()
    {
        $data = BookFacilities::all();
        return view("schedule", ["schedules" => $data]);
    }
}