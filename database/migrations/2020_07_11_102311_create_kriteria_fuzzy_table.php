<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaFuzzyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_fuzzy', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kriteria');

            $table->double("fuzzy_num_a");
            $table->double("fuzzy_num_b");
            $table->double("fuzzy_num_c");

            $table->foreign('id_kriteria')->references('id')->on('kriteria');

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
        Schema::dropIfExists('kriteria_fuzzy');
    }
}
