<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
<h1>Aplicación de adaptada a idiomas: Castellano</h1>


<fieldset class="idioma">
    <form action="sitio.php" method="post">

        <legend>Selecciona idioma</legend>
        <input type="radio" name="idioma" value="frances">Francés<br/>
        <input type="radio" name="idioma" value="ingles">Inglés<br/>
        <input type="radio" name="idioma" value="castellano">Castellano
        <input type="submit" style='float:right' name="submit" value="Establecer idioma">
    </form>
</fieldset>
<hr style='margin-top:50px'/>

<h2>Bienvenido a este sition web <?php echo $_POST['user'] ?></h2>

    <form action="index.php" method="post">

        <input type="submit" style='float:right' value="Volver">

    </form>

</body>
</html>
