<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('post_name');
            $table->string('title');
            $table->text('content');
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('title_image')->nullable();
            $table->enum('status', ['publish', 'draft']);
            $table->string('tags')->nullable(); // satu tag disimpan, misal "technology"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
