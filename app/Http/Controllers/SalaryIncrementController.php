<?php

namespace App\Http\Controllers;

use App\Models\SalaryIncrement;
use Illuminate\Http\Request;
use App\Models\SalaryInfo;
use App\Models\Staff;


use Session;

class SalaryIncrementController extends Controller
{
    public function increment_index()
    {        
        $increments = SalaryIncrement::orderBy('id', 'asc');
        $increments = $increments->paginate(10);
        return view('salary.salary_increment_index',['increments'=>$increments]);
    }
    public function increment_add()
    {
        return view('salary.salary_increment_add');
    }


    public function increment_ajax(Request $request)
    {
        if (!empty($_REQUEST['code'])) {
        $id = $_REQUEST['code'];
        $code = SalaryInfo::where('id', $id)->where('status', 'Active')->get();
        foreach ($code as $codes) {
            echo '<input type="text" disabled class="form-control"  name="staff_code" value="' . $codes->staff_code . '"> ';
        }
        exit;
        } 
        elseif (!empty($_REQUEST['designation'])) {
            $designation = $_REQUEST['designation'];
            $des = SalaryInfo::where('id', $designation)->where('status', 'Active')->get();
            foreach ($des as $desi) {
                echo '<input type="text" disabled class="form-control"  name="staff_designation" value="' . $desi->designation . '"> ';
            }
            exit;
        } 
        elseif (!empty($_REQUEST['gross_salary'])) {
            $gross = $_REQUEST['gross_salary'];
            $gross_salary = SalaryInfo::where('id', $gross)->where('status', 'Active')->get();
            foreach ($gross_salary as $sal) {
                echo '<input type="text" disabled class="form-control" id="net_salary" name="gross_salary" value="' . $sal->gross_salary . '"> ';
            }
            exit;
        } 
    }

    public function increment_store(Request $request)
    {
        $request->validate([
            'staff' => 'required',
            'increment_amount' => 'required',
        ]);

        $salary=new SalaryIncrement();
        $salary->staff_id = $request->staff;
        $staff = SalaryInfo::where('id',$request->staff)->first();
        $salary->staff_code = $staff->staff_code;
        $salary->staff_name = $staff->staff_name;
        $salary->designation = $staff->designation;
        $salary->gross_salary = $staff->gross_salary;
        $salary->increment_amount = $request->increment_amount;
        $salary->net_salary = $request->net_salary;
        $salary->save();
        Session::flash('message', 'Salary Increment Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_increment_index', ['index' => $salary]);    
    }

    public function increment_edit($id=null)
    {
        $increments=SalaryIncrement::where('id', '=', $id)->first();
        return view('salary.salary_increment_edit',['increments'=>$increments]);
    }

    public function increment_update(Request $request,$id=null)
    {
        $request->validate([
            'increment_amount' => 'required',
        ]);
        $salary=SalaryIncrement::find($id);
        $salary->staff_name=$salary->staff_name;
        $salary->staff_code=$salary->staff_code;
        $salary->designation=$salary->designation;
        $salary->gross_salary=$salary->gross_salary;
        $salary->increment_amount=$request->increment_amount;
        $salary->net_salary=$salary->gross_salary + $request->increment_amount ;
        $salary->save();
        Session::flash('message', 'Salary increment Details Updated!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_increment_index', ['index' => $salary]);

    }
    public function increment_view($id=null)
    {
        $increment= SalaryIncrement::where('id', '=', $id)->first();
        return view('salary.salary_increment_view',['increment'=>$increment]);    
    }

    //delete salary info  details

    public function increment_delete($id = null)
    {
        $sals= SalaryIncrement::find($id);
        $sals->delete();
        Session::flash('message', 'Salary Details Deleted Sucessfully!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_increment_index', []);
    }
}
