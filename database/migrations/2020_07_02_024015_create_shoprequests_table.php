<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoprequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoprequests', function (Blueprint $table) {
            $table->bigIncrements('shoprequest_id');
            $table->date('shop_requested_at');
            $table->enum('shop_allocated',['pending','accepted','rejected']);
            $table->unsignedBigInteger('shop_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('shop_id')->references('shop_id')->on('shops');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('owner_id')->references('owner_id')->on('owners');
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
        Schema::dropIfExists('shoprequests');
    }
}
