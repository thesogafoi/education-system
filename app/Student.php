<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $table = 'students';
    protected $fillable = [
        'firstname', 'username', 'lastname', 'email'
    ];
    protected $hiden = [
        'password',  'remember_token'
    ];
}
