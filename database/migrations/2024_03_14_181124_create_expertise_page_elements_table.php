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
        Schema::create('expertise_page_elements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text_content')->nullable();
            $table->string('image');
            $table->integer('type')->comment('type =1(both) and type =2(only image)');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expertise_page_elements');
    }
};
