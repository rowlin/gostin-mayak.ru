<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bron extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('bron', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('phone');
            $table->string('mail', 60);
            $table->text('bron_comment');
            $table->tinyInteger('kol');
            $table->tinyInteger('nomer');
            $table->boolean('predpl');
            $table->date('k_start');
            $table->date('k_end');
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
        Schema::drop('bron');
    }
}
