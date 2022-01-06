<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Companies;

class CompaniesSeeder extends Seeder
{

    // Két cég hozzáadása
    
    public function run()
    {
        Companies::create([
            'company_name' => 'Nyerő Kft.',
        ]);
        Companies::create([
            'company_name' => 'Kis Bt.',
        ]);

    }
}
