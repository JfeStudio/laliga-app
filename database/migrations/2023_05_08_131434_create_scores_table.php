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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
            $table->integer('played')->nullable()->default(0);
            $table->integer('win')->nullable()->default(0);
            $table->integer('draw')->nullable()->default(0);
            $table->integer('lose')->nullable()->default(0);
            $table->integer('goal_for')->nullable()->default(0);
            $table->integer('goal_against')->nullable()->default(0);
            $table->integer('points')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
