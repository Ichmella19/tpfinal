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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['non commencé', 'en cours', 'terminé'])->default('non commencé');
            $table->enum('priority', ['faible', 'moyenne', 'forte'])->default('moyenne');
            $table->foreignId('project_id')
                ->constrained('projects')
                ->onDelete('cascade');

            $table->foreignId('assigned_to')->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
