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
        //В данном случае столбец category_id таблицы products является внешним ключом, 
        //и он ссылается на столбец id таблицы categories.
        //Метод references('id') используется для указания того, 
        //что внешний ключ должен ссылаться на столбец id таблицы categories.
        //Это означает, что значения в столбце category_id таблицы products 
        //должны соответствовать значениям в столбце id таблицы categories.

        // выдаст ошибку т.к. не заполненно поле category_id, но все создаст

        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
