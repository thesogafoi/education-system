<?php

use App\Staff;
use App\StaffRoles;
use App\Student;
use Illuminate\Database\Seeder;

class InitializeData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StaffRoles::class)->create([
            'title' => 'admin',
        ]);
        factory(StaffRoles::class)->create([
            'title' => 'title',
        ]);

        factory(Student::class, 1)->create([
            'username' => 'thesogafoi',
            'email' => 'thesogafoi@gmail.com',
        ]);

        factory(Staff::class, 1)->create([
            'username' => 'thesogafoi',
            'email' => 'thesogafoi@gmail.com',
            'role_id' => 1
        ]);
    }
}
