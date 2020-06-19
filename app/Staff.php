<?php

namespace App;

use App\Traits\ForgetPasswordAble;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable , ThrottlesLogins , ForgetPasswordAble;
    protected $table = 'staffs';

    protected $fillable = [
        'firstname', 'username', 'lastname', 'email'
    ];
    protected $hiden = [
        'password',  'remember_token'
    ];

    // Relation Ships Section
    public function role()
    {
        return $this->belongsTo(StaffRoles::class)->first()->title;
    }

    // ******************
    // Custom functions
    // ******************

    public static function adminStaffs()
    {
        return static::all()->filter(function ($model) {
            return $model->role() == 'admin';
        });
    }

    public static function teacherStaffs()
    {
        return static::all()->filter(function ($model) {
            return $model->role() == 'teacher';
        });
    }
}
