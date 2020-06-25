<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiPreferensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_preferensi', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_rental');
            $table->unsignedBigInteger('id_petani');

            $table->string("input")->nullable();
            $table->double("nilai", 8, 4);

            $table->foreign('id_petani')->references('id')->on('petani');
            $table->foreign('id_rental')->references('id')->on('rental');

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
        Schema::dropIfExists('nilai_preferensi');
    }
}
