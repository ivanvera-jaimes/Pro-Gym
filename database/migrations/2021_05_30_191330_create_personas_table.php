<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->longText("foto")->nullable();
            $table->string("nombre");
            $table->string("apellido");
            $table->double("edad");
            $table->string("email");
            $table->double("altura");
            $table->double("peso");
            $table->double("imc");
            $table->unsignedBigInteger("plan_id");
            $table->timestamps();

            //llava foranea
            // $table->foreing('plan_id')->references('id')->on('planes')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('plan_id')->references('id')->on('planes')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
