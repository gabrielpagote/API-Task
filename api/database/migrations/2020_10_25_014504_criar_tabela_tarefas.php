<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaTarefas extends Migration
{

    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->tinyIncrements("id");
            $table->timestamps();
            $table->string("titulo");
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
}
