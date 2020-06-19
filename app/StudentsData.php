<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentsData extends Model
{
    public function students()
    {
        return $this->blongsto(Student::class);
    }
}
