<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleObjectsTable extends Migration
{
    public function up(): void
    {
        Schema::create('module_objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->string('image')->nullable();
            $table->string('object_name');
            $table->text('object_description')->nullable();
            $table->integer('index_order')->default(1);
            $table->string('parent_module')->nullable();
            $table->string('icon_css')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('module_objects');
    }
}
