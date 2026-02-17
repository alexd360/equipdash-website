<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('directory_listing_taxonomy', function (Blueprint $table) {
            $table->foreignId('directory_listing_id')->constrained()->cascadeOnDelete();
            $table->foreignId('directory_taxonomy_id')->constrained()->cascadeOnDelete();
            $table->primary(['directory_listing_id', 'directory_taxonomy_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('directory_listing_taxonomy');
    }
};
