<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriAnomalisTable extends Migration
{
    public function up()
    {
        Schema::create('kategori_anomalis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_anomalis');
    }
}
