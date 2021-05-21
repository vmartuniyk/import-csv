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
            $table->string('publisher')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('content_id')->nullable();
            $table->string('date')->nullable();
            $table->longText('description');
            $table->string('country')->nullable();
            $table->string('store_id')->nullable();
            $table->string('online')->nullable();
            $table->string('brand')->nullable();
            $table->string('variant')->nullable();
            $table->longText('url');
            $table->string('product_id')->nullable();
            $table->string('active')->nullable();
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
