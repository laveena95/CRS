<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinators extends Model
{
    protected $table='coordinators';
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
