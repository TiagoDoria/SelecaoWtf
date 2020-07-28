<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimento', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('observation');
            $table->unsignedBigInteger('id_tipo_atendimento')->unsigned()->nullable(true);
            $table->foreign('id_tipo_atendimento')->references('id')->on('tipo_atendimento');
            $table->unsignedBigInteger('id_tecnico')->unsigned()->nullable(true);
            $table->foreign('id_tecnico')->references('id')->on('users');
            $table->date('execution_date');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('atendimento');
    }
}
