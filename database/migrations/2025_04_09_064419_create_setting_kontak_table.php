<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('setting_kontak', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('alamat')->nullable();
            $table->text('maps')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('setting_kontak');
    }
};
