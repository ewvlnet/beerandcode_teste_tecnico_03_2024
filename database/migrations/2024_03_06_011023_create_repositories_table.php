<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('full_name')->unique();
            $table->string('html_url');
            $table->text('description')->nullable();
            $table->integer('stargazers_count');
            $table->string('owner')->nullable();
            $table->string('owner_url')->nullable();
            $table->string('owner_avatar')->nullable();
            $table->string('owner_type')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repositories');
    }
};
