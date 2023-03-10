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
         Schema::create('promo_codes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('coupon_name');
        $table->string('coupon_code');
        $table->boolean('coupon_used')->default(0);
        $table->integer('coupon_disc')->default(5000);
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
        Schema::dropIfExists('promo_codes');
    }
};
