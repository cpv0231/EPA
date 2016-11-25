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
             $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
             $table->integer('brand_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->integer('stocks');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->string('meta_title');
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
        Schema::dropIfExists('products');
    }
}
