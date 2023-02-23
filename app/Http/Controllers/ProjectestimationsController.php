<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectestimationsController extends Controller
{

    public function admin_index()
    {
        return view('projectestimations.admin_index');
    }

    public function admin_add()
    {
        return view('projectestimations.admin_add');
    }
}
