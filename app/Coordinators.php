<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinators extends Model
{
    
    protected $fillable=['fname',
                        'lname',
                         'gender',
                         'position',
                         'qualification',
                         'subject',
                         'appointment',
                         'mobile',
                         'email',
                         'password',
                         'image'];
}
