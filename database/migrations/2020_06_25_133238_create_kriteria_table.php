<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char("kode", 2);
            $table->string("nama");
            $table->string("satuan");
            $table->enum('keterangan', ['benefit', 'cost']);
            $table->string("himpunan");
            $table->integer("interval_min");
            $table->integer("interval_max");
            $table->string("fuzzy")->nullable();
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
        Schema::dropIfExists('kriteria');
    }
}
