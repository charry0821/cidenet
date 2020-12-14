<div class="btn-group btn-group-sm">
    <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{ route('empleados.editar', $empleado->id) }}" role="button"><i class="fa fa-eye"></i></a>

    <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar" href="{{ route('empleados.eliminar', $empleado->id) }}" role="button"><i class="fa fa-trash-alt"></i></a>
</div>