<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    private $proyectos = [
        [
            'id' => 1,
            'nombre' => 'Proyecto A',
            'fecha_inicio' => '2024-01-01',
            'estado' => 'En progreso',
            'responsable' => 'Ignacio',
            'monto' => 1000000,
        ],
        [
            'id' => 2,
            'nombre' => 'Proyecto B',
            'fecha_inicio' => '2024-03-15',
            'estado' => 'Finalizado',
            'responsable' => 'Camila',
            'monto' => 2500000,
        ],
    ];

    public function index()
    {
        return response()->json($this->proyectos, 200);
    }
public function show($id)
{
    $proyecto = collect($this->proyectos)->firstWhere('id', $id);

    if ($proyecto) {
        return response()->json($proyecto, 200);
    }

    return response()->json(['error' => 'Proyecto no encontrado'], 404);
}


    public function store(Request $request)
    {
        $nuevoProyecto = $request->all();
        $nuevoProyecto['id'] = count($this->proyectos) + 1;

        return response()->json($nuevoProyecto, 201);
    }

    public function update(Request $request, $id)
    {
        $proyecto = collect($this->proyectos)->firstWhere('id', $id);

        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        $proyectoActualizado = array_merge($proyecto, $request->all());

        return response()->json($proyectoActualizado, 200);
    }

    public function destroy($id)
    {
        $proyecto = collect($this->proyectos)->firstWhere('id', $id);

        if (!$proyecto) {
            return response()->json(['error' => 'Proyecto no encontrado'], 404);
        }

        return response()->json(null, 204);
    }
}
