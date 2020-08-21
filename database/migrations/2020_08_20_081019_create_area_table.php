<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps();
			$table->string('name', 50);
			$table->string('adcode', 10);
			$table->string('citycode', 10);
			$table->string('areaId', 10);
			$table->string('level', 20);
			$table->string('parent', 10);
			
			$table->index('adcode');
			$table->index('citycode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area');
    }
}
