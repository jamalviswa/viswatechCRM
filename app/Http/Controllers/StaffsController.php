<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;
use Session;
use Image;

class StaffsController extends Controller
{
   
    public function index()
    {
        $staffs = Staff::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $staffs->where(function ($query) use ($s) {
                $query->where('name', 'LIKE', "%$s%");
            });
        }
        $staffs = $staffs->paginate(10);
        return view('staffs.index', ['staffs' => $staffs]);
    }

   

    public function add()
    {
        return view('staffs.add');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'staff_name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'date_of_joining' => 'required',
            'mobile_number' => 'required',
            'designation' => 'required',
            'blood_group' => 'required',
            'address' => 'required',
            'profile' => 'required||mimes:jpg,jpeg,png,gif',
            'staff_name' => ['required', Rule::unique('staffs')->where(function ($query) use ($request) {
                return $query->where('staff_name', $request->staff_name)->where('status', '<>', 'Trash');
            })],
        ]);
        $staffs = new Staff();
        $staffs->staff_name = $request->staff_name;
        $staffs->staff_name = $request->staff_name;
        $staffs->username = $request->username;
        $staffs->password = Hash::make($request->password);
        $staffs->security_key = $request->password;
        $staffs->email = $request->email;
        $staffs->date_of_birth = $request->date_of_birth;
        $staffs->date_of_joining = $request->date_of_joining;
        $staffs->mobile_number = $request->mobile_number;
        $staffs->designation = $request->designation;
        $staffs->blood_group = $request->blood_group;
        $staffs->address = $request->address;
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $new_image = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(750, 750);
            $destination_path = public_path('/images/staffs/');
            $image_resize->save($destination_path . $new_image);
            $staffs->profile = $new_image;
        }
        $staffs->status = "Active";
        $staffs->save();
        $last_id = $staffs->getLastInsertId();
        $empcode = 'VTS' . sprintf("%'.03d", $last_id);
        $staffs->staff_code = $empcode;
        $staffs->status = "Active";
        $staffs->save();
        Session::flash('message', 'Staff Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('staffs.index', []);
    }
}
