<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30)->unique();
            $table->string('nameEN',30)->unique();
            $table->string('explain',240);
            $table->integer('remain')->default(0)->index();
            $table->integer('like')->default(0)->index();
            $table->integer('category_id')->index();
            $table->integer('deliver_time');
            $table->string('cost');
            $table->boolean('enable')->default(true);
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
        Schema::dropIfExists('foods');
    }
}
