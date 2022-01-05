<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{

    function getData(Request $req){

        $req->validate([
            'name'=>'required | min:5',
            'salary'=>'required | numeric|min:1'
        ]);

        //return $req->input();
        $data = $req->input();

        DB::table('employees')->insert([
            'company_id' => $data['company_id'],
            'name' => $data['name'],
            'salary' => $data['salary'],
        ]);
        return redirect('/home?alert=sikeres');

    }
    

}
