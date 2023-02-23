<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salaryinfo;
use App\Models\Staff;
use Session;

class SalaryinfosController extends Controller
{
    public function index()
    {
        $salaryinfos = Salaryinfo::where('status', '<>', 'Trash')->orderBy('id', 'desc');
        if (!empty($_REQUEST['s'])) {
            $s = $_REQUEST['s'];
            $salaryinfos->where(function ($query) use ($s) {
                $query->where('name', 'LIKE', "%$s%");
            });
        }
        $salaryinfos = $salaryinfos->paginate(10);
        return view('salaryinfos.index', ['salaryinfos' => $salaryinfos]);
    }

    public function add()
    {
        return view('salaryinfos.add');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'staff_name' => 'required',
            'gross_salary' => 'required'
        ]);
        $salaryinfos = new Salaryinfo();
        $salaryinfos->staff_id = $request->staff_name;
        $salaryinfos->gross_salary = $request->gross_salary;
        $staff_name = Staff::where('id', $request->staff_name)->first();
        $salaryinfos->staff_code = $staff_name->staff_code;
        $salaryinfos->staff_name = $staff_name->staff_name;
        $salaryinfos->status = "Active";
        $salaryinfos->save();
        Session::flash('message', 'Salary Info Details Added!');
        Session::flash('alert-class', 'success');
        return \Redirect::route('salaryinfos.index', []);
    }

    public function ajax(Request $request)
    {
        if (!empty($_REQUEST['staff'])) {
            $id = $_REQUEST['staff'];
            $staffs = Staff::where('id', $id)->get();
            foreach ($staffs as $staff) {
                echo '<input type="text" disabled class="form-control"  value="' . $staff->staff_code . '"> ';
            }
            exit;
        } else  if (!empty($_REQUEST['designation'])) {
            $id = $_REQUEST['designation'];
            $staffs = Staff::where('id', $id)->get();
            foreach ($staffs as $staff) {
                echo '<input type="text" disabled class="form-control"  value="' . $staff->designation . '"> ';
            }
            exit;
        } else  if (!empty($_REQUEST['mobile'])) {
            $id = $_REQUEST['mobile'];
            $staffs = Staff::where('id', $id)->get();
            foreach ($staffs as $staff) {
                echo '<input type="text" disabled class="form-control"  value="' . $staff->mobile_number . '"> ';
            }
            exit;
        }
    }

  
}
