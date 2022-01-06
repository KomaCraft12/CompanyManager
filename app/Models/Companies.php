<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employees;

class Companies extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasMany(Employees::class, "company_id", "company_id");
    }

    protected $fillable = ['company_name'];

    public $timestamps = false;
}
