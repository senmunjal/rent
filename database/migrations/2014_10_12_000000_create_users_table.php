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
            $table->bigIncrements('user_id');
            $table->string('user_name');
            $table->string('user_password');   
            $table->string('user_location');
            $table->enum('user_status',['0','1']);
            $table->string('user_phone_no');
            $table->string('user_rented_shop');
            $table->string('user_profile_pic');
            $table->date('user_email_verified_at')->nullable();
            $table->date('user_phone_verified_at')->nullable();
            $table->string('user_aadhaar_no')->nullable();
            $table->string('user_email')->unique();
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
