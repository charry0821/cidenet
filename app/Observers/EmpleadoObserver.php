<?php

namespace App\Observers;

use App\Models\Empleado;
use App\Models\Pais;
use Carbon\Carbon;

class EmpleadoObserver
{
    public function creating(Empleado $empleado) {

    	$pais = Pais::find($empleado->pais_id);
        $correo = strtolower($empleado->primer_apellido).'.'.strtolower($empleado->segundo_apellido).'@'.$pais->dominio;
        $empleado->correo = $correo;
        $empleado->fecha_registro = Carbon::now()->format('Y-m-d H:i:s');
    }
}
