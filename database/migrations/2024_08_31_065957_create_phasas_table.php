<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasasTable extends Migration
{
    public function up()
    {
        Schema::create('phasas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_phasa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phasas');
    }
}
