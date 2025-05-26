<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        label { display: block; margin-top: 10px; }
        input, select { width: 300px; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h1>Crear nuevo proyecto</h1>

    <form method="POST" action="/api/proyectos">
        @csrf
        <label>Nombre:
            <input type="text" name="nombre" required>
        </label>

        <label>Fecha de inicio:
            <input type="date" name="fecha_inicio" required>
        </label>

        <label>Estado:
            <select name="estado" required>
                <option>En progreso</option>
                <option>Finalizado</option>
                <option>Pendiente</option>
            </select>
        </label>

        <label>Responsable:
            <input type="text" name="responsable" required>
        </label>

        <label>Monto:
            <input type="number" name="monto" required>
        </label>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
