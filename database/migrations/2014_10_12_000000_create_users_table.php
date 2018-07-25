<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('cnpj')->unique();
            $table->string('endereco');
            $table->string('telefone');
            $table->string('atuacao');
            $table->string('email')->unique();
            $table->string('password')->bcrypt();
            $table->string('role')->default('admin');
            $table->string('avatar')->default('default.jpg');
            $table->engine = 'InnoDB';
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
