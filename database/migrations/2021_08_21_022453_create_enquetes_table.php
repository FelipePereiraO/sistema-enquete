<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquetes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->string('resposta_1');
            $table->string('resposta_2');
            $table->string('resposta_3');
            $table->integer('cont_resposta_1')->default(0);
            $table->integer('cont_resposta_2')->default(0);
            $table->integer('cont_resposta_3')->default(0);
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
        Schema::dropIfExists('enquetes');
    }
}
