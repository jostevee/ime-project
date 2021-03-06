<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalkshowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talkshow', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_day');
            $table->unsignedBigInteger('id_speaker');
            $table->integer('from_time');
            $table->integer('to_time');
            $table->string('zoom');
            $table->string('youtube');
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
        Schema::dropIfExists('talkshow');
    }
}
