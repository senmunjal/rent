<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('owner_id');
            $table->string('owner_name');
            $table->string('owner_email')->unique();
            $table->string('owner_password');
            $table->date('owner_email_verified_at')->nullable();
            $table->date('owner_phone_verified_at')->nullable();
            $table->string('owner_phoneno')->unique();
            $table->string('owner_aadhaar_no')->unique();
            $table->string('owner_permanent_address');
            $table->string('owner_current_address');
            $table->enum('owner_status',['0','1']);
            $table->string('owner_shop_count')->nullable();
            $table->string('owner_profile_pic')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
