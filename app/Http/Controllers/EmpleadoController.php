<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadoRequest;
use App\Models\Area;
use App\Models\Empleado;
use App\Models\Pais;
use App\Models\TipoIdentificacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Yajra\Datatables\Datatables;

class EmpleadoController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Lista todos los empleados que esten registrados en el sistema
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	$empleados = Empleado::all();
        $paises = Pais::all()->pluck('nombre', 'id');
        $tipoIdentificaciones = TipoIdentificacion::all()->pluck('nombre', 'id');
        $estados = collect([0 => "Inactivo", 1 => "Activo",]);
        return view('empleado.index', compact('empleados', 'tipoIdentificaciones', 'estados', 'paises'));
    }

    /**
     * Indexa la vista de crear un nuevo empleado
     * @return view
     */
    public function crear() {
        $paises = Pais::all();
        $tipoIdentificaciones = TipoIdentificacion::all();
        $areas = Area::all();
        $fechaRegistro = Carbon::now()->format('Y-m-d H:i:s');
        return view('empleado.crear', compact('fechaRegistro', 'tipoIdentificaciones', 'paises', 'areas'));
    }

    /**
     * Metodo que permite almacenar un nuevo empleado
     * @return view
     */
    public function almacenar(EmpleadoRequest $request) {
       $empleado = Empleado::create($request->validated());

       return redirect()
            ->route('empleados.index')
            ->withSuccess("El empleado número {$empleado->id} ha sido creado correctamente");
    }

    /**
     * TODO - Metodo que retorna la vista para edición de un empleado.
     * @return view
     */
    public function editar() {
        dd('edición');
    }

    /**
     * TODO - Metodo que elimina un empleado
     * @return view
     */
    public function eliminar() {
        dd('elimino');
    }

    /**
     * Metodo que permite filtrar los empleados
     * @param  Request $request - request de los filtros
     * @return Datatable
     */
    public function filtros(Request $request) {
        if ($this->validarFiltros($request)) {
            // TODO - Falta agregar scopes para filtros.
            $empleados = Empleado::all();
        } else {
            $empleados = Empleado::all();
        }
        return Datatables::of($empleados)
            ->addColumn('acciones', function ($empleado) {
                $subvista = View::make('empleado.subvistas._acciones')->with('empleado', $empleado);
                  
                $vista = $subvista->render();

                return $vista; 
            })
            ->rawColumns(['acciones'])
            ->make(true);
    }

    /**
     * Valida si la petición llega con filtros a aplicar a las búsquedas
     * @author José Camilo Jaimes Charry
     * @version 20201213
     * @param  Request $request - request de la petición que captura la solicitud de la vista
     * @return boolean - Devuelve verdadero en el caso que tenga al menos un filtro a aplicar, falso en caso contrario
     */
    private function validarFiltros($request) {
        $atributos = ['primer_apellido', 'segundo_apellido', 'primer_nombre', 'otro_nombre', 'tipo_identificacion', 'numero_identificacion', 'correo', 'pais', 'estado'];
        $existe = false;
        foreach ($atributos as $atributo) {
            if (isset($request->{$atributo})) {
                $existe = true;
            }            
        }
        return $existe;
    }
}
