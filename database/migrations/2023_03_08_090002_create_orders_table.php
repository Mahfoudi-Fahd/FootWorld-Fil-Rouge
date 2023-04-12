<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->Integer('zipcode');
            $table->mediumText('adress');
            $table->string('status_message');
            $table->mediumText('payment_mode');
            $table->mediumText('payment_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
