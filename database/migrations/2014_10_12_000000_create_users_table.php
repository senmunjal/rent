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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('password');   
            $table->string('location');
            $table->enum('status',['0','1']);
            $table->string('phoneno');
            $table->string('rented_shop');
            $table->string('profile_pic');
            $table->date('email_verified_at')->nullable();
            $table->date('phone_verified_at')->nullable();
            $table->string('aadhaar_no')->nullable();
            $table->string('email')->unique();
            $table->rememberToken()->nullable();
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
