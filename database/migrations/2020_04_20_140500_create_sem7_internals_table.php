<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSem7InternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem7_internals', function (Blueprint $table) {
            $table->id();
			$table->string('int1');
			$table->string('int1mark');
			$table->string('int2');
			$table->string('int2mark');
			$table->string('int3');
			$table->string('int3mark');
			$table->string('int4');
			$table->string('int4mark');
			$table->string('int5');
			$table->string('int5mark');
			$table->string('int6')->nullable();
			$table->string('int6mark')->nullable();
			$table->string('int7')->nullable();
			$table->string('int7mark')->nullable();
			$table->string('int8')->nullable();
			$table->string('int8mark')->nullable();
			$table->string('int9')->nullable();
			$table->string('int9mark')->nullable();
			$table->string('int10')->nullable();
			$table->string('int10mark')->nullable();
			$table->string('int11')->nullable();
			$table->string('int11mark')->nullable();
			$table->string('total');
			$table->string('outOf');
			$table->string('remark');
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
        Schema::dropIfExists('sem7_internals');
    }
}
