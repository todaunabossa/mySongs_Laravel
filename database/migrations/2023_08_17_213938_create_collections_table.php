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
        Schema::create('collections', function (Blueprint $table) {
            $table->id()->unique();
            $table->binary('photo')->nullable();
            $table->string('title');
            $table->string('artist');
            $table->string('album');
            $table->string('date');
            $table->timestamps();
            $table->time('duration')->nullable();
            $table->string('sonido')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
