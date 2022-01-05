<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use Database\seeders\CreateCompany;

class Home extends Controller
{
    public function index() {

        $companies = Companies::all();

        return view('home', ['companies' => $companies]);

    }
}
