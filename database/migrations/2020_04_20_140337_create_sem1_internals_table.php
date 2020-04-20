<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSem1InternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem1_internals', function (Blueprint $table) {
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
			$table->string('int6');
			$table->string('int6mark');
			$table->string('total');
			$table->string('outOf');
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
        Schema::dropIfExists('sem1_internals');
    }
}
