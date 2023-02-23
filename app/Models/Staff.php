<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = ['staff_name','username','password','profile','staff_code','email','date_of_birth','date_of_joining','mobile_number','designation','blood_group','address'];
}
