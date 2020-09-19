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
                $table->string('name');
                $table->string('image')->nullable();
                $table->text('description');
                $table->double('price');
                $table->unsignedBigInteger('categorie_id');
                $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
                $table->unsignedBigInteger('sub_categorie_id');
               $table->foreign('sub_categorie_id')->references('id')->on('sub_categories')->onDelete('cascade');
               
    
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
