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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->String('perfil',100);
            $table->String('nombre',100);
            $table->String('apellido',100);
            $table->String('telefono',10);
            $table->String('fijo',12);
            $table->String('email',150);
            $table->String('direccion',150);
            $table->String('sexo',10);
            $table->String('trabajo');
            $table->String('region',30);
            $table->String('descripcion',150);

            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('grupo_id');

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('grupo_id')->references('id')->on('grupos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
