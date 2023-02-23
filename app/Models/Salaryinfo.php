<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaryinfo extends Model
{
    use HasFactory;

    protected $table = 'salaryinfos';

    protected $fillable = ['staff_id','gross_salary','staff_code','staff_name'];
}
