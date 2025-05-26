<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input, select { width: 300px; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>Editar Proyecto</h1>

    @if ($proyecto)
        <form method="POST" action="/api/proyectos/{{ $proyecto['id'] }}">
            @csrf
            @method('PUT')

            <label>Nombre:
                <input type="text" name="nombre" value="{{ $proyecto['nombre'] }}" required>
            </label>

            <label>Fecha de inicio:
                <input type="date" name="fecha_inicio" value="{{ $proyecto['fecha_inicio'] }}" required>
            </label>

            <label>Estado:
                <select name="estado" required>
                    <option {{ $proyecto['estado'] == 'En progreso' ? 'selected' : '' }}>En progreso</option>
                    <option {{ $proyecto['estado'] == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
                    <option {{ $proyecto['estado'] == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                </select>
            </label>

            <label>Responsable:
                <input type="text" name="responsable" value="{{ $proyecto['responsable'] }}" required>
            </label>

            <label>Monto:
                <input type="number" name="monto" value="{{ $proyecto['monto'] }}" required>
            </label>

            <button type="submit">Actualizar</button>
        </form>
    @else
        <p>Proyecto no encontrado.</p>
    @endif
</body>
</html>
