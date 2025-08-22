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
        Schema::create('lista_filme', function (Blueprint $table) {
            $table->foreignId("lista_personalizada_id")->constrained()->onDelete("cascade"); 
            $table->foreignId("filme_id")->constrained()->onDelete("cascade"); 
            $table->primary(['lista_personalizada_id', 'filme_id']); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lista_filme');
    }
};
