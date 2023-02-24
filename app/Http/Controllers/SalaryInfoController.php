<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Models\Staffs;
use App\Models\SalaryInfo;

class SalaryInfoController extends Controller
{
    public function salary_info_index()
    {
        $salary = SalaryInfo::orderBy('id', 'asc');
        
        $salary = $salary->paginate(10);
        return view('/salary/salary_info_index', [
            '$salary' => $salary      
        ]);
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
               'staff_id'=>'required',
               'designation'=>'required',
               'gross_salary'=>'required',
        ]);
        $salary=new SalaryInfo();
        $data=Staffs::select('id','name','designation')->where('name',$request->staff_name)->get();
        return view('staffs.staff_index',['staffs'=>$data]);

        

        $salary->save();
        Session::flash('message', 'Salary Info Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salary.salary_info_index', ['index' => $salary]);

    }
}
