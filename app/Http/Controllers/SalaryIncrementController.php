<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryIncrementController extends Controller
{
    public function salary_increment_index()
    {
        return view('salary.salary_increment_index');
    }
    public function salary_increment_add()
    {
        return view('salary.salary_increment_add');
    }

   
}
