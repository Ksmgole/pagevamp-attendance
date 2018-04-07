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
<<<<<<< HEAD:database/migrations/2018_03_31_132145_create_users_table.php
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
=======

            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->boolean('is_admin')
                ->default(0)
                ->comment('1 is for admin, 0 is for normal user');

            $table->string('citizenship_number')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('verification_key')->nullable();
            $table->dateTime('verification_expiration_date')->nullable();

            $table->rememberToken();
>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add:database/migrations/2014_10_12_000000_create_users_table.php
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
