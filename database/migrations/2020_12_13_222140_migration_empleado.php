<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('primer_apellido', 20)->comment('Primer apellido del empleado');
            $table->string('segundo_apellido', 20)->comment('Segundo apellido del empleado');
            $table->string('primer_nombre', 20)->comment('Primer nombre del empleado');
            $table->string('otro_nombre', 50)->nullable()->comment('Segundo u otros nombres del empleado');
            $table->string('numero_identificacion', 20)->comment('Número de identificación del empleado');
            $table->string('correo', 300)->comment('Correo electrónico del empleado generado por el sistema');
            $table->boolean('estado')->default(1)->comment('Determina si el empleado esta activo o no');
            $table->dateTime('fecha_ingreso')->comment('Fecha en la que ingresa el empleado a laborar');
            $table->dateTime('fecha_registro')->comment('Fecha en la que registra el empleado en el sistema');
            $table->foreignId('area_id')->comment('Id área a la qu esta asociada el empleado');
            $table->foreignId('tipo_identificacion_id')->comment('Tipo de identificación del empleado');
            $table->foreignId('pais_id')->comment('Id del pais asociado al empleado');
            $table->timestamps();

            $table->unique(['tipo_identificacion_id', 'numero_identificacion']);
            $table->foreign('area_id')->references('id')->on('area')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificacion')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('pais_id')->references('id')->on('pais')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
