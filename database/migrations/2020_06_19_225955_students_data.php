<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentsData extends Migration
{
    public function up()
    {
        Schema::create('students_data', function (Blueprint $table) {
            $table->id();

            $table->integer('student_id')->unsigned()->index()->nullable();

            $table->string('fathersname', 100)->nullable();
            $table->string('birthdate')->nullable();
            $table->string('studentsid', 10)->nullable();
            $table->string('serialnumberid', 100)->nullable();
            $table->string('issueplace', 100)->nullable();
            $table->string('birthplace', 100)->nullable();

            $table->string('fathersfirstname', 100)->nullable();
            $table->string('fatherslastname', 100)->nullable();
            $table->string('fathersfathersname', 100)->nullable();
            $table->string('fathersbirthdate', 100)->nullable();
            $table->string('fathersid', 10)->nullable();
            $table->string('fathersnationalid', 10)->nullable();
            $table->string('fathersserialnumberid', 100)->nullable();
            $table->string('fathersissueplace', 100)->nullable();
            $table->string('fathersbirthplace', 100)->nullable();
            $table->string('fatherseducation', 100)->nullable();
            $table->string('fathersjob', 100)->nullable();
            $table->string('fathersphone', 100)->nullable();
            $table->string('fathersjobaddress', 100)->nullable();

            $table->string('mothersfirstname', 100)->nullable();
            $table->string('motherslastname', 100)->nullable();
            $table->string('mothersfathersname', 100)->nullable();
            $table->string('mothersbirthdate', 100)->nullable();
            $table->string('mothersid', 10)->nullable();
            $table->string('mothersnationalid', 10)->nullable();
            $table->string('mothersserialnumberid', 100)->nullable();
            $table->string('mothersissueplace', 100)->nullable();
            $table->string('mothersbirthplace', 100)->nullable();
            $table->string('motherseducation', 100)->nullable();
            $table->string('mothersjob', 100)->nullable();
            $table->string('mothersphone', 100)->nullable();
            $table->string('mothersjobaddress', 100)->nullable();

            $table->string('numberofchildren', 10)->nullable();
            $table->string('numberofbrothers', 10)->nullable();
            $table->string('numberofsisters', 10)->nullable();
            $table->text('address')->nullable();
            $table->string('homesphone', 100)->nullable();
            $table->string('postalcode', 10)->nullable();
            $table->string('exschool', 100)->nullable();
            $table->text('howfindus')->nullable();
            $table->text('childtalent')->nullable();
            $table->string('student_service_bool')->nullable();
            $table->string('preschool_student_shift_bool')->nullable();

            $table->string('form_completer', 100)->nullable();
            $table->date('form_completed_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_data');
    }
}
