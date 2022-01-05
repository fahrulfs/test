<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePulsaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulsa', function (Blueprint $table) {  $table->string('nama_provider');
            $table->bigInteger('no_hp');
            $table->bigInteger('nominal_beli');
            $table->bigInteger('nominal_bayar');
            $table->id();
          
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
        Schema::dropIfExists('pulsa');
    }
}
