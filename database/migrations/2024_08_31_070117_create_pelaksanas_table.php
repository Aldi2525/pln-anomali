<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaksanasTable extends Migration
{
    public function up()
    {
        Schema::create('pelaksanas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelaksana');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaksanas');
    }
}
