<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinculos', function (Blueprint $table) {
            $table->id('vinculo_id');
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('cargo_id');
            $table->unsignedBigInteger('empresa_id');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('funcionario_id')->references('funcionario_id')->on('funcionarios')
                ->onUpdate('CASCADE');
            $table->foreign('cargo_id')->references('cargo_id')->on('cargos')
                ->onUpdate('CASCADE');
            $table->foreign('empresa_id')->references('empresa_id')->on('empresas')
                ->onUpdate('CASACADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vinculos');
    }
}
