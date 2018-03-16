<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipe_rumah');
            $table->integer('harga_rumah');
            $table->integer('luas_tanah');
            $table->integer('jumlah_lantai');
            $table->integer('kamar_tidur');
            $table->integer('kamar_mandi');
            $table->string('status')->default('belum');
            $table->string('alamat');
            $table->integer('jenis_id')->unsigned();
            $table->integer('agen_id')->unsigned();
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('agen_id')->references('id')->on('agens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenis')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumahs');
    }
}
