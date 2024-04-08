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
            $table -> string('name') -> nullable();
            $table -> string('phone') -> nullable();
            $table -> string('email') -> nullable();
            $table -> string('city') -> nullable();
            $table -> string('address') -> nullable();
            $table -> string('note') -> nullable();
            $table -> string('order_detail') -> default(0);
            $table -> integer('status') -> default(0);
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
