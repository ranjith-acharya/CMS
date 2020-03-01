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
            $table->bigIncrements('id');
			$table->string('admissionNo')->unique();
			$table->string('firstName');
			$table->string('fatherName');
			$table->string('motherName');
			$table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
			$table->string('address');
			$table->string('contact1');
			$table->string('contact2');
			$table->string('birth');
			$table->string('age');
			$table->string('gender');
			$table->string('year');
			$table->string('branch');
			$table->string('avatar');
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
