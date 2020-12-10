<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_petani');
            $table->unsignedBigInteger('id_rental')->nullable();
            $table->enum('status', ['Menunggu', 'Diproses', 'Selesai']);

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
        Schema::dropIfExists('transaksi');
    }
}
