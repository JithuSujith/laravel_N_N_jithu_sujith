<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('article_tag', function (Blueprint $table) {

            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')
                  ->references('id')->on('articles');

            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')
                  ->references('id')->on('tags');

        });
    }

    public function down(): void
    {
        Schema::table('article_tag', function (Blueprint $table) {
            $table->dropForeign(['article_id']);
            $table->dropForeign(['tag_id']);

            $table->dropColumn(['article_id', 'tag_id']);
        });
    }
};