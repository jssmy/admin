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
            $table->string('document_number',8);
            $table->string('user_name',8)->unique();
            $table->string('name',100);
            $table->string('last_name',255);
            $table->boolean('state')->default(1);
            $table->string('password',20);
            $table->boolean('require_change_password')->default(1);
            $table->unsignedBigInteger('user_created_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('user_created_id')->references('id')->on('users');

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
