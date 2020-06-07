<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
    use Notifiable;
    protected $table = 'teachers';
    protected $guard = 'teacher';
    protected $fillable = [
        'firstname', 'username', 'lastname', 'email'
    ];
    protected $hiden = [
        'password',  'remember_token'
    ];
}
