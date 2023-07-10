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

        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_llave')->references('id')->on('llaves');
            $table->foreignId('id_llave')
            ->nullable()
            ->constrained('llaves')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->foreignId('id_ambiente')
            ->nullable()
            ->constrained('ambientes')
            ->cascadeOnUpdate()
            ->nullOnDelete();
            $table->string('prestatario');
            $table->string('encargado');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
