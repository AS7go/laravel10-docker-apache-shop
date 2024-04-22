<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //В коде, который вы предоставили, создается таблица product_images 
        //с ограничением внешнего ключа на столбец product_id, который ссылается
        // на столбец id таблицы products.

        //Это означает, что таблица product_images зависит от таблицы products. 
        //Конкретно, каждая запись в таблице product_images связана с одной записью 
        //в таблице products. Столбец product_id в таблице product_images хранит 
        //значение id соответствующей записи в таблице products.
        
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
