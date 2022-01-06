<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Employees;

class Controller extends BaseController
{

    function getData(Request $req){

        // Form mezők ellenőrzése
        $req->validate([
            'name' => 'required | min:5',
            'salary' => 'required | numeric | min:1'
        ]);

        // Form adatok átvétele
        $data = $req->input();

        
        // Adatok hozzáadása az adatbázishoz
        Employees::create([
            'company_id' => $data['company_id'],
            'name' => $data['name'],
            'salary' => $data['salary'],
        ]);
        $notify = "Sikeres adatfelvétel!";
        return redirect('/home?alert='.urlencode($notify));
        
        
    }
    

}

