<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario en PHP</h1>

<!--Metodo : por url POST
    accion : A que pagina le envio el contenido del formaulario
    Los parametros POST, NO se muestran en la URL
-->
<form action="recibirPost.php" method="POST">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
    </p>

    <input type="submit" value="Enviar">
</form>
</body>
</html>