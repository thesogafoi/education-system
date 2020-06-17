<?php

use App\Student;
use App\Teacher;
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
        factory(Student::class, 1)->create([
            'username' => 'thesogafoi',
            'email' => 'thesogafoi@gmail.com',
        ]);

        factory(Teacher::class, 1)->create([
            'username' => 'thesogafoi',
            'email' => 'thesogafoi@gmail.com',
        ]);
    }
}
