<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSem3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sem3s', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('extSub1');
			$table->string('extSubMark1');
			$table->string('intSubMark1');
			$table->string('extSub2');
			$table->string('extSubMark2');
			$table->string('intSubMark2');
			$table->string('extSub3');
			$table->string('extSubMark3');
			$table->string('intSubMark3');
			$table->string('extSub4');
			$table->string('extSubMark4');
			$table->string('intSubMark4');
			$table->string('extSub5');
			$table->string('extSubMark5');
			$table->string('intSubMark5');
			$table->string('extSub6');
			$table->string('extSubMark6');
			$table->string('intSubMark6');
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
        Schema::dropIfExists('sem3s');
    }
}
