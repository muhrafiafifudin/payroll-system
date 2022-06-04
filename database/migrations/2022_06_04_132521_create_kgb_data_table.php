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
            $table->tinyInteger('employee_id');
            $table->tinyInteger('category_id');
            $table->date('date');
            $table->date('start_date_salary');
            $table->date('year_of_services');
            $table->date('new_salary');
            $table->date('start_date');
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
