<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnomalisTable extends Migration
{
    public function up()
    {
        Schema::create('anomalis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bay_id')->constrained('bays')->onDelete('cascade');
            $table->foreignId('peralatan_id')->constrained('peralatans')->onDelete('cascade');
            $table->foreignId('phasa_id')->constrained('phasas')->onDelete('cascade');
            $table->foreignId('kategori_anomali_id')->constrained('kategori_anomalis')->onDelete('cascade');
            $table->string('permasalahan');
            $table->date('tanggal_temuan');
            $table->date('tanggal_rencana')->nullable();
            $table->date('tanggal_realisasi')->nullable();
            $table->string('anomaly_mayor_minor');
            $table->string('status');
            $table->foreignId('pelaksana_id')->constrained('pelaksanas')->onDelete('cascade');
            $table->decimal('kebutuhan_anggaran', 15, 2)->nullable();
            $table->decimal('rab', 15, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anomalis');
    }
}
