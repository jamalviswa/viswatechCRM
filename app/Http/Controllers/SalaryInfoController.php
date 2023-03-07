<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\SalaryInfo;
use Session;

class SalaryInfoController extends Controller
{
    public function salary_info_index()
    {
        $salary = SalaryInfo::orderBy('id', 'asc');
        if(!empty($_REQUEST['staff_name'])) {
            $search_text = $_REQUEST['staff_name'];
            $salary->orwhere(function ($query) use ($search_text) {
                $query->where('staff_name','LIKE', "%$search_text%");
                });
        }
        $salary = $salary->paginate(10);
        return view('/salary/salary_info_index', ['salary' => $salary]);     

    }

    //add salary info details

    public function salary_info_add()
    {
        
        return view('salary.salary_info_add');
    }

    public function salary_info_store(Request $request)
    {
        $validate=$request->validate([
               'staff_name'=>'required',
               'gross_salary'=>'required',
        ]);
        $salary=new SalaryInfo();
        $salary->staff_id=$request->staff_name;
        $staff=Staff::where('id',$request->staff_name)->first();
        $salary->staff_name=$staff->staff_name;
        $salary->staff_code=$staff->staff_code;
        $salary->designation=$staff->designation;
        $salary->gross_salary=$request->gross_salary;
        $salary->save();
        Session::flash('message', 'Salary Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_info_index', ['index' => $salary]);

    }

    public function ajax(Request $request)
    {
        if (!empty($_REQUEST['staff_code'])) {
            $id = $_REQUEST['staff_code'];
            $codes = staff::where('id', $id)->where('status', 'Active')->get();
            foreach ($codes as $code) {
                echo '<input type="text" disabled class="form-control"  name="staff_code" value="' . $code->staff_code . '"> ';
            }
            exit;
        } 

        elseif(!empty($_REQUEST['designation'])) {
            $des = $_REQUEST['designation'];
            $designations = staff::where('id', $des)->where('status', 'Active')->get();
            foreach ($designations as $designation) {
                echo '<input type="text" disabled class="form-control"  name="designation" value="' . $designation->designation . '"> ';
            }
            exit;
        } 

        

        elseif(!empty($_REQUEST['doj'])) {
            $doj = $_REQUEST['doj'];
            $dojs = staff::where('id', $doj)->where('status', 'Active')->get();
            foreach ($dojs as $doj) {
                echo '<input type="text" disabled class="form-control"  name="doj" value="' . $doj->date_of_joining . '"> ';
            }
            exit;
        } 

       
    }


    public function salary_info_edit($id=null)
    {
        $sals= SalaryInfo::where('id', '=', $id)->first();
        return view('salary.salary_info_edit',['sals'=>$sals]);    
    }
    //update staff details
    public function salary_info_update(Request $request,$id=null)
    {
        $validate=$request->validate([
            'gross_salary'=>'required',
        ]);
        $salary=SalaryInfo::find($id);
        $salary->staff_name=$salary->staff_name;
        $salary->staff_code=$salary->staff_code;
        $salary->designation=$salary->designation;
        $salary->gross_salary=$request->gross_salary;
        $salary->save();
        Session::flash('message', 'Salary Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_info_index', ['index' => $salary]);

    }


    
    //view salary info details

    public function salary_info_view($id=null)
    {
        $sals= SalaryInfo::where('id', '=', $id)->first();
        return view('salary.salary_info_view',['sals'=>$sals]);    
    }

    //delete salary info  details

    public function salary_info_delete($id = null)
    {
        $sals= SalaryInfo::find($id);
        $sals->delete();
        Session::flash('message', 'Salary Details Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_info_index', []);
    }
}

    

