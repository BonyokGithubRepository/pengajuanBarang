<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_request', function (Blueprint $table) {
            $table->id('id_request');
            $table->integer('id_ptl');
            $table->integer('id_perangkat');
            $table->integer('id_mitra');
            $table->string('spa');
            $table->date('tgl_request');
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
        Schema::dropIfExists('form_request');
    }
}
