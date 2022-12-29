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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_product')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('size_id')->nullable();
            $table->integer('total_cost')->nullable();
            $table->integer('status_id')->default('1');
            $table->integer('pembayaran_id')->default('1');
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
        Schema::dropIfExists('carts');
    }
};
