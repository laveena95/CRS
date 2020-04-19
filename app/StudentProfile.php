<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $table='studentProfile';
    protected $fillable=['fname',
    'lname',
    'gender',
    'DOB',
    'age',
    'Semester',
    'Registration_No',
    'Course_Period',
    'email',
    'phone',
    'address',
    'nationality',
    'image'];
}
