<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="estilos/app.css">
    <title>Index</title>
</head>
<body>
    <div class="login">
            <form method="post" action="validar_login.php">
                <h1>Iniciar Sesión</h1>
        	    <input type="text" name="usuario" placeholder="Usuario" required="required" />
                <input type="password" name="clave" placeholder="Contraseña" required="required" />
                <button type="submit">Iniciar sesión</button>
                <a href="registrar.php">Registrate aqui</a>
            </form>
            <div class="logo">
                 <img src="https://i.ibb.co/7X9f8St/Dise-o-sin-t-tulo.png" alt="logo">
                 <h2>Francisco Puas</h2>
                 <h2>Willy Quispe</h2>
            </div>
    </div>
<script src="app/main.js"></script>
</body>
</html>