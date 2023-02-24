<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use App\Models\Staff;
use Session;
use Image;
use File;

class StaffsController extends Controller
{
    public function staff_index()
    {
        $staffs = Staff::orderBy('id', 'asc');
        if(!empty($_REQUEST['search_text'])) {
            $search_text = $_REQUEST['search_text'];
            $staffs->orwhere(function ($query) use ($search_text) {
                $query->where('staff_name','LIKE', "%$search_text%");
                });
        }
        
        if(!empty($_REQUEST['search_text'])) {
            $search_text = $_REQUEST['search_text'];
            $staffs->orwhere(function ($query) use ($search_text) {
            $query->where('mobile_number','LIKE', "%$search_text%");
            });           
        }
        
        if(!empty($_REQUEST['search_text'])) {
            $search_text = $_REQUEST['search_text'];
            $staffs->orwhere(function ($query) use ($search_text) {
                $query->where('designation','LIKE', "%$search_text%");
            });
        }
        $staffs = $staffs->paginate(10);
        return view('/staffs/staff_index', [
            'staffs' => $staffs       
        ]);
    }

    //add

    public function staff_add()
    {
        return view('staffs.staff_add');
    }

    //store staff details
    public function staff_store(Request $request)
    {
        $request->validate([
            

            'staff_name' => ['required', Rule::unique('staffs')->where(function ($query) use ($request) {
                return $query->where('staff_name', $request->staff_name)->where('status', '<>', 'Trash');
            })],

            'username' => ['required', Rule::unique('staffs')->where(function ($query) use ($request) {
                return $query->where('username', $request->username)->where('status', '<>', 'Trash');
            })],

            'password' => 'required',
            'email' => 'required',

            'mobile_number' => ['required', Rule::unique('staffs')->where(function ($query) use ($request) {
                return $query->where('mobile_number', $request->mobile_number)->where('status', '<>', 'Trash');
            })],

            'date_of_birth' => 'required',
            'date_of_joining'=> 'required',
            'designation' => 'required',
            'profile' => 'required||mimes:jpg,jpeg,png,gif',
        ]);
        $staffs=new Staff();
        $id=$staffs->id;
        $staffs->staff_code =('VTS'.''.$id);
        $staffs->staff_name = $request->staff_name;
        $staffs->username = $request->username;
        $staffs->password = Hash::make($request->password);
        $staffs->token= $request->password;
        $staffs->email = $request->email;
        $staffs->mobile_number = $request->mobile_number;
        $staffs->date_of_birth = $request->date_of_birth;
        $staffs->date_of_joining= $request->date_of_joining;
        $blood_type=implode(',',$request->blood_group_type);
        $staffs->blood_group = $request->blood_group." ".$blood_type;
        $staffs->designation = $request->designation;
        $staffs->address = $request->address;
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $new_image = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/staffs/');
            $image_resize->save($destination_path . $new_image);
            $staffs->profile = $new_image;
        }
        $staffs->save();
        $result = $staffs['id'];
        $staffuser = Staff::where('id', '=', $result)->first();
        $empcode = 'VTS' . sprintf("%'.03d", $result);
        $staffuser->staff_code = $empcode;
        $staffuser->save();
        Session::flash('message', 'Staff Details Added Successfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('staffs.staff_index', []);

    }

    //edit staff details
    
    public function staff_edit($id=null)
    {
        $staffs= Staff::where('id', '=', $id)->first();

        $blood_group_type=explode(',',$staffs->blood_group_type);
      
        return view('staffs.staff_edit',['staffs'=>$staffs,'blood_group_type'=>$blood_group_type]);
    }

   //update staff details
    public function staff_update(Request $request,$id=null)
    {
        $val=$request->validate([
            'staff_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'mobile_number' =>'required', 
            'date_of_birth' => 'required',
            'date_of_joining'=> 'required',
            'designation' => 'required',
            'profile' => 'required',
        ]);
        $staffs=Staff::find($id);
        $staffs->staff_name = $request->staff_name;
        $staffs->username = $request->username;
        $staffs->email = $request->email;
        $staffs->mobile_number = $request->mobile_number;
        $staffs->date_of_birth = $request->date_of_birth;
        $staffs->date_of_joining = $request->date_of_joining;
        $blood_type=implode(',',$request->blood_group_type);
        $blood_group=strtoupper($request->blood_group);
        $staffs->blood_group = $blood_group." ".$blood_type;
        $staffs->designation = $request->designation;
        $staffs->address = $request->address;
        if ($request->hasFile('profile')) {
            $destination = public_path('/images/staffs/'.$staffs->profile);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('profile');
            $new_image1 = date('Y-m-d-') . time() . "." . $image->extension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1080, 1080);
            $destination_path = public_path('/images/staffs/');
            $image_resize->save($destination_path . $new_image1);
            $staffs->profile = $new_image1;
        }       
        $staffs->save();
        Session::flash('message', 'Staff Details Updated Successfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('staffs.staff_index', []);

    }


    //view staff details

    public function staff_view($id=null)
    {
        $staffs= Staff::where('id', '=', $id)->first();
        return view('staffs.staff_view',['staffs'=>$staffs]);
    }

    //delete staff details

    public function staff_delete($id = null)
    {
        $staffs = Staff::find($id);
        $staffs->delete();
        Session::flash('message', 'Staff Details Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('staffs.staff_index', []);
    }
}
