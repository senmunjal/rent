<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('email_verified_at')->nullable();
            $table->date('phone_verified_at')->nullable();
            $table->string('phoneno')->unique()->nullable();
            $table->string('aadhaar_no')->unique()->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable();
            $table->enum('status',['0','1']);
            $table->string('shop_count')->nullable();
            $table->string('profile_pic')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
