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
       /*  Schema::create('promo_codes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('product_name');
        $table->string('total_price');
        $table->string('promo_code');
        $table->string('discount_amount');
        $table->string('grand_total');
        }); */
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
