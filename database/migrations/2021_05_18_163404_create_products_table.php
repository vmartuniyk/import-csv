<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->string('publisher')->default("");
            $table->string('name')->default("");
            $table->string('price')->default("");
            $table->string('content_id')->default("");
            $table->string('date')->default("");
            $table->longText('description');
            $table->string('country')->default("");
            $table->string('store_id')->default("");
            $table->string('online')->default("");
            $table->string('brand')->default("");
            $table->string('variant')->default("");
            $table->longText('url');
            $table->string('product_id')->default("");
            $table->string('active')->default("");
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
