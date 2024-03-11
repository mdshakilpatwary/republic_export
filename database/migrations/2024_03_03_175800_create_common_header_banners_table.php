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
        Schema::create('common_header_banners', function (Blueprint $table) {
            $table->id();
            $table->string('b_title');
            $table->string('b_subTitle')->nullable();
            $table->string('b_textContent')->nullable();
            $table->string('b_image')->nullable();
            $table->text('b_quote')->nullable();
            $table->string('type')->uniqid();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('common_header_banners');
    }
};
