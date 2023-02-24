<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

use Session;

class ClientsMeetingController extends Controller
{
    public function meeting_index()
    {
        $meetings = Meeting::orderBy('id', 'asc');
        if (!empty($_REQUEST['search_text'])) {
            $search_text = $_REQUEST['search_text'];
            $meetings->orwhere(function ($query) use ($search_text) {
                $query->where('client_name','LIKE', "%$search_text%");
            });
            $meetings->orwhere(function ($query) use ($search_text) {
                $query->where('mobile_no','LIKE', "%$search_text%");
            });
            $meetings->orwhere(function ($query) use ($search_text) {
                $query->where('business_name','LIKE', "%$search_text%");
            });
            $meetings->orwhere(function ($query) use ($search_text) {
                $query->where('location','LIKE', "%$search_text%");
            });
        }
        
            
        

        $meetings = $meetings->paginate(10);
        return view('/clients/meeting_index', [
            'meetings' => $meetings       
        ]);
    }

    public function meeting_add()
    {
        return view('clients.meeting_add');
    }

    public function meeting_store(Request $request)
    {
        $val=$request->validate(
            [
                'client_name'=>'required',
                'mobile_number' => 'required',
                'location' =>'required',
                'business_name' =>'required',
                'business_description' =>'required',
                'purpose' =>'required',
                'date' =>'required',
                'time'=>'required',
                'remarks'=>'required',
            ]);
            $meetings=new Meeting();
            $meetings->client_name=$request->client_name;
            $meetings->mobile_no = $request->mobile_number;
            $meetings->location = $request->location;
            $meetings->business_name = $request->business_name;
            $meetings->business_desc = $request->business_description;
            $meetings->purpose = $request->purpose;
            $meetings->date = $request->date;
            $meetings->time = $request->time;
            $meetings->remarks = $request->remarks;
            $meetings->save();  
            Session::flash('message', 'Meeting Details Added Successfully!');
            Session::flash('alert-class', 'success');
            return \Redirect::route('clients.meeting_index', []);
    }
    //edit meeting details
    
    public function meeting_edit($id=null)
    {
        $meetings= Meeting::where('id', '=', $id)->first();
        return view('clients.meeting_edit',['meeting'=>$meetings]);
    }

    //update meeting details
    public function meeting_update(Request $request , $id=null)
    {
        $validate=$request->validate(
            [
                'client_name'=>'required',
                'mobile_number' => 'required',
                'location' =>'required',
                'business_name' =>'required',
                'business_description' =>'required',
                'purpose' =>'required',
                'date' =>'required',
                'time'=>'required',
                'remarks'=>'required',
            ]);
            $meetings=Meeting::find($id);
            $meetings->client_name=$request->client_name;
            $meetings->mobile_no = $request->mobile_number;
            $meetings->location = $request->location;
            $meetings->business_name = $request->business_name;
            $meetings->business_desc = $request->business_description;
            $meetings->purpose = $request->purpose;
            $meetings->date = $request->date;
            $meetings->time = $request->time;
            $meetings->remarks = $request->remarks;
            $meetings->save();  
            Session::flash('message', 'Meeting Details updated Successfully!');
            Session::flash('alert-class', 'success');
            return \Redirect::route('clients.meeting_index', []);
    }

    //view meeting details

    public function meeting_view($id=null)
    {
        $meetings= Meeting::where('id', '=', $id)->first();
        return view('clients.meeting_view',['meeting'=>$meetings]);
    }

    //delete meeting details

    public function meeting_delete($id = null)
    {
        $meetings = Meeting::find($id);
        $meetings->delete();
        Session::flash('message', 'Meeting Details Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('clients.meeting_index', []);
    }

}
