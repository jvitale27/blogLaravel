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
    public function up()        //crea la tabla "users"
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();                                   //Integer Unsigned Increment llamado id
//            $table->string('name', 100);                         //varchar de 100 caracteres
            $table->string('name');                         //varchar de 255
//            $table->text('name');                         //varchar de mas de 255
            $table->string('email')->unique();              //columna con valor unico, que no se repita
            $table->timestamp('email_verified_at')->nullable();     //fecha de verificacion de correo electronico
            $table->string('password');
            $table->rememberToken();            //crea varchar de 100. Token mientras esta iniciada la sesion
            $table->timestamps();               //crea dos columnas, create_at y update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()      //borra la tabla "users"
    {
        Schema::dropIfExists('users');
    }
}
