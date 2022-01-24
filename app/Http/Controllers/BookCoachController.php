<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCoach;

class BookCoachController extends Controller
{
    public function setUpBookCoach(Request $request)
    {
        $request->validate([
            "name" => "required",
            "date" => "required",
            "phone" => "required",
            "time" => "required",
            "email" => "required|email|unique:users"
        ]);
        $user = new BookCoach();
        $user->name = $request->name;
        $user->date = $request->date;
        $user->phone = $request->phone;
        $user->time = $request->time;
        $user->email = $request->email;
        $res = $user->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }

    public function show()
    {
        $data = BookCoach::all();
        return view("appointment", ["appointments" => $data]);
    }

    public function confirm($id)
    {
    }

    public function delete($id)
    {
        $data = BookCoach::findOrFail($id);
        $data->delete();
        return redirect('appointment');
    }
}