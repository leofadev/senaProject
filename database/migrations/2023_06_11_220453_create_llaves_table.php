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
        Schema::create('llaves', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion_llave')->uniqid();
            $table->foreignId('id_ambiente')
            ->nullable()
            ->constrained('ambientes')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llaves');
    }
};
