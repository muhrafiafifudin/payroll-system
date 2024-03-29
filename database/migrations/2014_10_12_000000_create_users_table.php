<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_category')->nullable();
            $table->string('name');
            $table->string('nip')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('kantor')->nullable();
            $table->string('email')->nullable();
            $table->string('pejabat')->nullable();
            $table->string('nomor_gaji_lama')->nullable();
            $table->date('tanggal_gaji_lama')->nullable();
            $table->date('berlaku_gaji_lama')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('type')->nullable()->default(0)->comment('0 for Not Process KGB & 1 for Process KGB');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
