<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyanOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syan_orders', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('unit');
            $table->string('orderType');
            $table->string('name')->nullable();
            $table-> string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('table');
            $table->string('subject')->nullable();
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
        Schema::dropIfExists('syan_orders');
    }
}
