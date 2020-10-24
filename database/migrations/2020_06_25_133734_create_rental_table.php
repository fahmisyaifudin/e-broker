<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_user');

            $table->string("nama");
            $table->string("jenis_truk");
            $table->string("foto")->nullable();
            $table->string("alamat");
            $table->string("long");
            $table->string("lat");

            $table->foreign('id_user')->references('id')->on('users');
            
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
        Schema::dropIfExists('rental');
    }
}
