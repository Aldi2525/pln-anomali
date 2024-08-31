<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaysTable extends Migration
{
    public function up()
    {
        Schema::create('bays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gardu_id')->constrained('gardus')->onDelete('cascade');
            $table->string('nama_bay');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bays');
    }
}
