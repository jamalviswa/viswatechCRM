<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryInfo extends Model
{
    use HasFactory;
    protected $table = 'salary_infos';

    protected $fillable = ['staff_name','staff_code','designation','date_of_joining'];

}
