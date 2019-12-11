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

<!--Metodo : por url GET
    accion : A que pagina le envio el contenido del formaulario
    Los parametros GET, se muestran en la URL despues del signo de interrogacion => ? y separador por un &
-->
<form action="recibirGet.php" method="GET">
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