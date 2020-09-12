<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_product', function (Blueprint $table) {
            $table->id();
            
             $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('disease_id');
             $table->text('description');
            $table->timestamps();


            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->foreign('disease_id')->references('id')->on('diseases')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_product');
    }
}
