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
        Schema::create('about_index', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('subtitle');
            $table->string('subtitle');
            $table->string('store_name');
            $table->string('description');
            $table->integer('products');
            $table->integer('custumers');
            $table->integer('orders');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_index');
    }
};
