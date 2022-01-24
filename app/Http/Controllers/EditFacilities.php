<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilities;
use App\Models\AddFacilitiesID;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EditFacilities extends Controller
{
    public function edit()
    {
        return view("editfacilities");
    }
    public function addFacilities(Request $request)
    {
        $request->validate([
            "picture" => "required",
            "name" => "required",
            "description" => "required"
        ]);
        $facilities = new Facilities();
        $facilities->picture = $request->picture;
        $facilities->name = $request->name;
        $facilities->description = $request->description;
        $res = $facilities->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }
    public function addFacilitiesID($id)
    {
        $data = Facilities::findOrFail($id);
        return view("add", compact('data'));
    }
    public function add()
    {
        return view("addFacilitiesID");
    }
    public function addID(Request $request)
    {
        $request->validate([
            "picture" => "required",
            "name" => "required",
            "description" => "required",
            "no" => "required"
        ]);
        $facilities = new AddFacilitiesID();
        $facilities->picture = $request->picture;
        $facilities->name = $request->name;
        $facilities->description = $request->description;
        $facilities->no = $request->no;
        $res = $facilities->save();
        if ($res) {
            return back()->with("success", "You have submitted successfully");
        } else {
            return back()->with("fail", "Something wrong");
        }
    }
    public function show()
    {
        $data = Facilities::all();
        return view("facilitiesinfo", ["facilities" => $data]);
    }
    public function showID()
    {
        $data = AddFacilitiesID::all();
        return view("facilitiesID", ["facilities" => $data]);
    }
    public function editData($id)
    {
        $data = Facilities::findOrFail($id);
        return view("edit", compact('data'));
    }
    public function update(Request $request)
    {
        $data = Facilities::findOrFail($request->id);
        $data->picture = $request->picture;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect("facilitiesinfo");
    }
    public function delete($id)
    {
        $data = Facilities::findOrFail($id);
        $data->delete();
        return redirect('facilitiesinfo');
    }
    public function deleteID($id)
    {
        $data = AddFacilitiesID::findOrFail($id);
        $data->delete();
        return redirect('facilitiesID');
    }
    public function generate($id)
    {
        $data = AddFacilitiesID::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($data->no);
        return view('qr-code', compact('qrcode'));
    }
}