<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsData extends Model
{
    protected $guarded = [
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
