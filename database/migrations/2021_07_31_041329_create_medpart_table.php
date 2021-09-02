<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedpartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medpart', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->unique();
            $table->string('name');
            $table->text('info');
            $table->string('video');
            $table->string('ig')->unique();
            $table->string('fb')->unique();
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
        Schema::dropIfExists('medpart');
    }
}
