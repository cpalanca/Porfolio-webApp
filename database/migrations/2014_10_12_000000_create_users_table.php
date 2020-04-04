<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//tipo varchar
            $table->string('email')->unique();//varchar y unico
            $table->timestamp('email_verified_at')->nullable();//cuando el user confirmo el user
            $table->string('password');//varchar encriptado
            $table->rememberToken();//para crear sesiones de usuarios
            $table->timestamps();//para almacenar fecha y hora de creacion y actualizacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');//elimina la tabla
    }
}
