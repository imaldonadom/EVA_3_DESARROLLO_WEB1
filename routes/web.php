<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/vista-proyectos', function () {
    $url = request()->getSchemeAndHttpHost() . '/api/proyectos';
    $response = Http::get($url);
    $proyectos = $response->successful() ? $response->json() : [];

    return view('proyectos.index', compact('proyectos'));
});

Route::get('/crear-proyecto', function () {
    return view('proyectos.create');
});

Route::get('/proyecto/{id}', function ($id) {
    $url = request()->getSchemeAndHttpHost() . '/api/proyectos/' . $id;
    $response = Http::get($url);
    $proyecto = $response->successful() ? $response->json() : null;

    return view('proyectos.show', compact('proyecto'));
});

Route::get('/editar-proyecto/{id}', function ($id) {
    $url = request()->getSchemeAndHttpHost() . '/EVA_3_DESARROLLO_WEB1/api/proyectos/' . $id;

    $response = Http::get($url);
    $proyecto = $response->successful() ? $response->json() : null;

    return view('proyectos.edit', compact('proyecto'));
});
Route::post('/proyecto', function () {
    $data = request()->all();
    $url = request()->getSchemeAndHttpHost() . '/api/proyectos';
    $response = Http::post($url, $data);

    if ($response->successful()) {
        return redirect('/vista-proyectos')->with('success', 'Proyecto creado exitosamente.');
    }

    return redirect('/crear-proyecto')->withErrors('Error al crear el proyecto.');
});
