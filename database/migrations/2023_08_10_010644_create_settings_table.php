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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('logo');
            $table->longText('ficon');
            $table->text('title_site');
            $table->text('address');
            $table->text('twitter');
            $table->text('instagram');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('whats_up');
            $table->string('email');
            $table->string('phone');
            $table->longText('map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
