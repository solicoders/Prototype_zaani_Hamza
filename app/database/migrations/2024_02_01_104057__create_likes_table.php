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
        Schema::create('likes', function (Blueprint $table): void {
            $table->id();
            $table->string('nom');
            $table->string('utilisateur');
            $table->TIMESTAMP('Date_de_création');
            $table->TIMESTAMP('Date_de_modification');
            $table->string('Référence');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('posts');
    }
};
