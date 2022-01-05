<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companies;

class EmployeesList extends Controller
{
    public function index() {

        $employees = Employees::join('companies', 'companies.company_id', '=', 'employees.company_id')->get(['companies.company_name', 'employees.*']);
        return view('employees', ['employees' => $employees]);

    }
}
