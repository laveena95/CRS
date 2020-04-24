<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table= 'resumes';
    protected $fillable=['name',
    'Registration_No',
    'phone',
    'company',
    'position',
    'cv',];

}