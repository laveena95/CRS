<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable=['cname',
                        'address',
                        'businessType',
                        'achievement',
                        'active',
                        'contact',
                        'email',
                        'website',
                        'password'];
}
