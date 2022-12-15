<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="estilos/app.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
            <form method="post" action="registrar_usuario.php">
                <h1>Registrar</h1>
                <input type="text" name="rut" placeholder="Rut" required="required" />
                <input type="text" name="nombre" placeholder="Nombre" required="required" />
                <input type="text" name="apellido" placeholder="Apellido" required="required" />
                <input type="text" name="origen" placeholder="Origen" required="required" />
                <input type="number" name="nivel" placeholder="Nivel" required="required" min="1" max="2" />
                <button type="submit">Registrar</button>
            </form>
    </div>
<script src="app/main.js"></script>
</body>
</html>