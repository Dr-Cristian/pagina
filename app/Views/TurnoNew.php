<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url('css/turno.css')?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Turno</title>
</head>
<body>
    <form action="newTurno1" method="POST">

        <label for="fecha">Fecha y hora:</label><br>
        <input type="datetime-local" id="fecha_hora" name="fecha_hora" required><br>

        <input type="submit" value="Añadir Turno">
    </form>
</body>
</html>
