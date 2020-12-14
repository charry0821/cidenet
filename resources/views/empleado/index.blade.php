
@extends('layouts.app')

@section('content')
    <h1>Lista de empleados</h1>

    <a class="btn btn-success mb-3" href="{{ route('empleados.crear') }}">Crear empleado</a>

    <div class="row">
	    <div class="col-md-12">
	        @include('empleado.subvistas.filtros')
	    </div>
	</div>

        <div class="table-responsive">
            <table id="tabla-empleados" class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Primer apellido</th>
                        <th>Segundo apellido</th>
                        <th>Primer nombre</th>
                        <th>Otros nombres</th>
                        <th>Tipo de identificación</th>
                        <th>Número de identificación</th>
                        <th>Correo</th>
                        <th>País</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
@endsection

@section('custom_scripts')

<script>
	/**
	 * Fracción de código que se encarga de obtener los datos de los empleados para mostrarlos en el datatable y se encarga de filtrar los empleados
	 * una vez se haya seleccionado algún filtro o se decida limpiar el filtro que se ha seleccionado.
	 * 
	 */
    var datatable = null;
    var tabla = null;

    $(function() { 
        datatable = iniciarDatatable();
        tabla = $("#tabla-empleados");

        $("#filtrar").click(function() {
            refreshDatatable();
        });

        $("#limpiar").click(function() {
            window.location="{{route('empleados.index')}}";
        });

        $('[data-toggle="tooltip"]').tooltip()
    });

    function refreshDatatable(){
        datatable.ajax.reload();
    }

    function iniciarDatatable() {
        return $('#tabla-empleados').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            order: [[ 0, "desc" ]],
            scrollY: "42vh",
            scrollCollapse: true,
            bFilter: false,
            bLengthChange: false,
            paging: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{!! route('empleados.filtros') !!}",
                data: function(request) {
                    request.primer_apellido = $("#primer_apellido").val();
                    request.segundo_apellido = $("#segundo_apellido").val();
                    request.primer_nombre = $("#primer_nombre").val();
                    request.otro_nombre = $("#otro_nombre").val();
                    request.tipo_identificacion = $("#tipo_identificacion").val();
                    request.numero_identificacion = $("#numero_identificacion").val();
                    request.correo = $("#correo").val();
                    request.pais = $("#pais").val();
                    request.estado = $("#estado").val();
                }
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'primer_apellido', name: 'primer_apellido'},
                {data: 'segundo_apellido', name: 'segundo_apellido'},
                {data: 'primer_nombre', name: 'primer_nombre'},
                {data: 'otro_nombre', name: 'otro_nombre'},
                {data: 'tipo_identificacion_id', name: 'tipo_identificacion_id'},
                {data: 'numero_identificacion', name: 'numero_identificacion'},
                {data: 'correo', name: 'correo'},
                {data: 'pais_id', name: 'pais_id'},
                {data: 'estado', name: 'estado'},
                {data: 'acciones', name: 'acciones', orderable: false, searchable: false},
            ]
        });
    }
</script>
@endSection

