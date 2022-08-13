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
            $table->tinyInteger('id_category')->nullable();
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
