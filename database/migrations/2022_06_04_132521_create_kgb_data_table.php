<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKgbDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kgb_data', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_user');
            $table->string('pejabat_lama');
            $table->date('tanggal_gaji_lama');
            $table->string('nomor_gaji_lama');
            $table->date('berlaku_gaji_lama');
            $table->string('masa_kerja_gaji_lama');
            $table->integer('gaji_pokok_baru');
            $table->string('masa_kerja_gaji_baru');
            $table->string('golongan');
            $table->date('berlaku_gaji_baru');
            $table->string('nomor_pp');
            $table->string('mengetahui');
            $table->string('nip_mengetahui');
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
        Schema::dropIfExists('kgb_data');
    }
}
