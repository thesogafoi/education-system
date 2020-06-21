<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffRoles extends Model
{
    // Relation Ships Section
    public function staff()
    {
        return $this->hasMany(staff::class);
    }
}
