<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendukungAnomalisTable extends Migration
{
    public function up()
    {
        Schema::create('data_pendukung_anomalis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anomali_id')->constrained('anomalis')->onDelete('cascade');
            $table->string('tipe_data');
            $table->string('link_data_pendukung');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_pendukung_anomalis');
    }
}

