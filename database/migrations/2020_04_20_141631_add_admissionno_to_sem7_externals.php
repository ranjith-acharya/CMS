<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdmissionnoToSem7Externals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sem7_externals', function (Blueprint $table) {
            $table->string('admissionNo')->unique();
			$table->string('studentId');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('branch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sem7_externals', function (Blueprint $table) {
            //
        });
    }
}
