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
        Schema::create('tb_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('noserie');
            $table->string('marca');
            $table->integer('cantidad');
            $table->decimal('costo', 10, 4);
            $table->date('fecha');
            $table->string('estatus');
            $table->string('foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_productos');
    }
};
