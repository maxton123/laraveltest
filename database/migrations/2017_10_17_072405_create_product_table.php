<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_string');
            $table->string('name');
            $table->integer('programId');
            $table->string('programName');
            $table->float('price');
            $table->string('currency');
            $table->text('description');
            $table->string('manufacturer');
            $table->biginteger('ean');
            $table->string('image');
            $table->float('priceOld');
            $table->float('shippingCosts');
            $table->string('merchantCategory');
            $table->string('merchantEmail');
            $table->timestamps('modified');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
