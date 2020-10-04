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
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id_rol');
            $table->string('descripcion');
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('run');
            $table->string('est_civil')->default("soltero");
            $table->string('sex');
            $table->string('cel_phone')->nullable();
            $table->string('phone')->nullable();
            $table->string('adress');
            $table->string('state');
            $table->date('cumple');
            $table->string('email')->unique();
            $table->string('img_id');
            $table->string('contrato')->nullable();
            $table->string('coti')->nullable();
            $table->string('subsidio')->nullable();
            $table->integer('renta')->nullable();
            $table->integer('ahorro')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('id_rol')->default(1);
            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->string('password');
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
        Schema::dropIfExists('roles');
    }
}
