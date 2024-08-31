<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatansTable extends Migration
{
    public function up()
    {
        Schema::create('peralatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peralatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peralatans');
    }
}

