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
        Schema::create('categuris', function (Blueprint $table) {
            $table->id();
            $table->string('dastgah');
            // $table->string('mode');
            // $table->string('fee');
            // $table->string('toz');
            // $table->string('foroshgah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categuris');
    }
};
