<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Создание таблицы tags
        Schema::create('tags', function (Blueprint $table) {
            $table->id(); // Автоматический первичный ключ
            $table->string('name'); // Имя тега
            $table->timestamps(); // Временные метки created_at и updated_at
        });

        // Создание промежуточной таблицы article_tag
        Schema::create('article_tag', function (Blueprint $table) {
            $table->id(); // Автоматический первичный ключ
            $table->foreignId('article_id')->constrained()->onDelete('cascade'); // Внешний ключ на статьи
            $table->foreignId('tag_id')->constrained()->onDelete('cascade'); // Внешний ключ на теги
            $table->timestamps(); // Временные метки created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Удаление промежуточной таблицы
        Schema::dropIfExists('article_tag');

        // Удаление таблицы tags
        Schema::dropIfExists('tags');
    }
}
