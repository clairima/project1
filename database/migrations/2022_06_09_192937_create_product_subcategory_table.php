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
        Schema::create('product_subcategory', function(Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_subcategory');
    }
};
