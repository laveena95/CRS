<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewStudents extends Model
{
    protected $fillable=['fname',
                            'lname',
                            'gender',
                            'DOB',
                            'Age',
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
