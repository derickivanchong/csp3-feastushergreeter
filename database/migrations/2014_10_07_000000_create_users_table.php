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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('role_id')->default(6);
            $table->unsignedInteger('team_id')->default(1);
            $table->string('active_or_not')->default('active');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('role_id')
            // ->references('id')->on('roles')
            // ->onDelete('restrict')
            // ->onUpdate('cascade');

            // $table->foreign('team_id')
            // ->references('id')->on('teams')
            // ->onDelete('restrict')
            // ->onUpdate('cascade');
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
