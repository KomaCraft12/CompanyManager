<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companies;

class EmployeesList extends Controller
{
    public function index() {

        $employees = Employees::all();
        return view('employees', ['employees' => $employees]);

    }
}
