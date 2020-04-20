<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSem2ExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem2_externals', function (Blueprint $table) {
            $table->id();
			$table->string('ext1');
			$table->string('ext1mark');
			$table->string('ext2');
			$table->string('ext2mark');
			$table->string('ext3');
			$table->string('ext3mark');
			$table->string('ext4');
			$table->string('ext4mark');
			$table->string('ext5');
			$table->string('ext5mark');
			$table->string('ext6');
			$table->string('ext6mark');
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
        Schema::dropIfExists('sem2_externals');
    }
}
