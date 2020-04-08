<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
			$table->string('username')->unique();
			$table->string('firstName');
			$table->string('lastName');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('gender');
			$table->string('birth');
			$table->string('contact1');
			$table->string('contact2');
			$table->string('address');
			$table->string('teaching');
			$table->string('branch');
			$table->string('stream')->default('engineering');
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
        Schema::dropIfExists('staff');
    }
}
