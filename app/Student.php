<?php

namespace App;

use App\Notifications\StudentCreated;
use App\Traits\ForgetPasswordAble;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use  ThrottlesLogins , ForgetPasswordAble;

    public static function booted()
    {
        static::created(function ($student) {
            $student->studentsData()->create();
            Staff::adminStaffs()->each(function ($staff) use ($student) {
                $staff->notify(new StudentCreated($student));
            });
        });
    }

    protected $table = 'students';
    protected $fillable = [
        'firstname', 'username', 'lastname', 'email'
    ];
    protected $hiden = [
        'password',  'remember_token'
    ];

    // ***************
    // relation ships
    // ***************
    public function studentsData()
    {
        return $this->hasOne(StudentsData::class);
    }

    // *****************
    // Custom Functions
    // *****************
    public function studentSubmittedForm()
    {
        $this->status = 1;
        $this->save();
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
}
