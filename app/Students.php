<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable=['fname',
    'lname',
    'gender',
    'DOB',
    'age',
    'Semester',
    'Registration_No',
    'PIN',
    'Course_Period',
    'email',
    'phone',
    'address',
    'nationality',
    'image'];
}
