<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->unique();
            $table->string('name');
            $table->string('info');
            $table->string('video');
            $table->string('ig')->unique();
            $table->string('fb')->unique();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('ngos');
    }
}
