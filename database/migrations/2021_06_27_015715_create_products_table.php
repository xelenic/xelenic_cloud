<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->text('product_name');
            $table->text('description')->nullable();
            $table->text('icon');
            $table->text('images')->nullable();
            $table->text('category')->comment(
                'Category Name');
            $table->text('screenshots')->nullable();
            $table->text('short_description');
            $table->text('link')->nullable();
            $table->text('price')->nullable();
            $table->text('product_type')->nullable()->comment(
                'downloadable,cloud_tool,cloud_product'
            );
            $table->text('json_documentation')->nullable();
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
