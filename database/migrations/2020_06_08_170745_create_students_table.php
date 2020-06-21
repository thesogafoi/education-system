<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique();
            $table->string('email', 255)->nullable()->unique();
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();

            $table->integer('students_data_id')->unsigned()->index()->nullable();
            $table->boolean('close_alert')->default(false);
            $table->string('reset_password_token', 255)->nullable();
            $table->string('password', 255);
            $table->unsignedTinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}
