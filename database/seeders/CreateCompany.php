<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateCompany extends Seeder
{

    // Két cég hozzáadása
    
    public function run()
    {
        DB::table('companies')->insert([
            'company_name' => 'Nyerő Kft.',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Kis Bt.',
        ]);

    }
}
