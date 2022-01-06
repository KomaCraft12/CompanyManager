<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companies;

class Employees extends Model
{
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Companies::class, "company_id", "company_id");
    }

    protected $fillable = ['company_id', 'name', 'salary'];

    public $timestamps = false;
}
