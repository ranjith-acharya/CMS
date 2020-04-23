<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSem7ExternalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem7_externals', function (Blueprint $table) {
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
			$table->string('ext6')->nullable();
			$table->string('ext6mark')->nullable();
			$table->string('ext7')->nullable();
			$table->string('ext7mark')->nullable();
			$table->string('ext8')->nullable();
			$table->string('ext8mark')->nullable();
			$table->string('ext9')->nullable();
			$table->string('ext9mark')->nullable();
			$table->string('ext10')->nullable();
			$table->string('ext10mark')->nullable();
			$table->string('ext11')->nullable();
			$table->string('ext11mark')->nullable();
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
        Schema::dropIfExists('sem7_externals');
    }
}
