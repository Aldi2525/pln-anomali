<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGardusTable extends Migration
{
    public function up()
    {
        Schema::create('gardus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gardu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gardus');
    }
}

