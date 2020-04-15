<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable=['company_name',
                         'title',
                         'description',
                         'experience',
                         'total_positions',
                         'job_location',
                         'gender',
                         'industry',
                         'skills'];
}
