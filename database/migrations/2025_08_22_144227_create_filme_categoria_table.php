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
        Schema::create('filme_categoria', function (Blueprint $table) {
            $table->foreignId("filme_id")->constrained()->onDelete("cascade"); 
            $table->foreignId("categoria_id")->constrained()->onDelete("cascade"); 
            $table->primary(["filme_id", "categoria_id"]); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filme_categoria');
    }
};
