<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
			$table->string('name', 30);
			$table->string('password', 50);
			$table->string('tel', 11);
			$table->string('token', 50);
			$table->integer('addtime')->unsigned();
			
			$table->unique('tel');
			$table->unique('token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nusers');
    }
}
