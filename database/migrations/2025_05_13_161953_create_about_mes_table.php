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
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable();       // "Who Am I?"
            $table->string('title')->nullable();          // "About Me"
            $table->text('description')->nullable();      // الفقرة الرئيسية
            $table->string('image')->nullable();          // رابط الصورة (path)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_mes');
    }
};
