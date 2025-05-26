<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Proyecto</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .dato { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Detalle del Proyecto</h1>

    @if ($proyecto)
        <div class="dato"><strong>ID:</strong> {{ $proyecto['id'] }}</div>
        <div class="dato"><strong>Nombre:</strong> {{ $proyecto['nombre'] }}</div>
        <div class="dato"><strong>Fecha de Inicio:</strong> {{ $proyecto['fecha_inicio'] }}</div>
        <div class="dato"><strong>Estado:</strong> {{ $proyecto['estado'] }}</div>
        <div class="dato"><strong>Responsable:</strong> {{ $proyecto['responsable'] }}</div>
        <div class="dato"><strong>Monto:</strong> ${{ number_format($proyecto['monto'], 0, ',', '.') }}</div>
    @else
        <p>Proyecto no encontrado.</p>
    @endif
</body>
</html>

