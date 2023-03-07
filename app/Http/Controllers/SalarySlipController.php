<?php

namespace App\Http\Controllers;

use App\Models\SalaryIncrement;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\SalaryInfo;
use App\Models\Salaryship;
use Mockery\Matcher\HasValue;

class SalarySlipController extends Controller
{

    public function index()
    {
        return view('salary.salary_slip_index');
    }
    public function add()
    {
        return view('salary.salary_slip_add');
    }
    public function store(Request $request)
    {
        $salslip=new Salaryship();
       
    }
    public function view()
    {
        return view('salary.salary_slip');
        
    }
    public function slip_ajax(Request $request)
    {
        if (!empty($_REQUEST['name'])) {
            $staff_name = $_REQUEST['name'];
            $names = Staff::where('id', $staff_name)->where('status', 'Active')->get();
            foreach ($names as $name) {
                echo '<input class="form-control" type="text" disabled   name="staff_name"  value="' . $name->staff_name . '"> '; 
                
            }
            exit;
        } 
        elseif (!empty($_REQUEST['code'])) {
             $id = $_REQUEST['code'];
           $codes = Staff::where('id', $id)->where('status', 'Active')->get();
            foreach ($codes as $code) {
                echo '<input type="text" disabled class="form-control"  name="staff_code" value="' . $code->staff_code . '"> ';
            }
            exit;
        } 

        elseif(!empty($_REQUEST['designation'])) {
            $des = $_REQUEST['designation'];
            $designations = Staff::where('id', $des)->where('status', 'Active')->get();
            foreach ($designations as $designation) {
                echo '<input type="text" disabled class="form-control"  name="designation" value="' . $designation->designation . '"> ';
            }
            exit;
        } 

        elseif(!empty($_REQUEST['doj'])) {
            $doj = $_REQUEST['doj'];
            $dojs = Staff::where('id', $doj)->where('status', 'Active')->get();
            foreach ($dojs as $doj) {
                echo '<input type="text" disabled class="form-control"  name="doj" value="' . $doj->date_of_joining . '"> ';
            }
            exit;
        } 
        elseif(!empty($_REQUEST['basic'])) {
            $basic = $_REQUEST['basic'];
            $basic_sal = SalaryInfo::where('staff_id', $basic)->where('status', 'Active')->get();
            foreach ($basic_sal as $basic_sals) {
                echo '<input type="text" disabled class="form-control"  id="basic_sal" name="basic" value="' . $basic_sals->gross_salary . '"> ';
            }
            exit;
        } 

        elseif(!empty($_REQUEST['month']))
        {
            $month = $_REQUEST['month'];
            $days = cal_days_in_month(CAL_GREGORIAN, $month,date('y'));
            $array['no_of_days'] = $days;
            echo '<input type="text" disabled class="form-control"  id="total_days"  name="no_of_days" value="' . $days . '"> ';
        }
        
     }


    

}
