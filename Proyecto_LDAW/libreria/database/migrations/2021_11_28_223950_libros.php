<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('ISBN');
            $table-> string('Titulo');
            $table-> string('Autor');
            $table-> string('AnoPublicacion');
            $table-> string('Paginas');
            $table-> string('Editorial');
            $table-> string('LugarPublicacion');
            $table-> bigIncrements('categoria_id')->unsigned;    
            $table->timestamps();
            $table-> foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}