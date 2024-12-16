<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=dev1ice-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <title>Cotenido</title>
</head>
<body>
    <div class="contenedor">
        <h3 class="titulo">Bienvenido <?php echo $_SESSION['usuario'];?></h3>
        <h1 class="titulo">Contenido del sitio</h1>
        <a href="cerrar.php">Cerrar sesion</a>
        <hr class="border">
        <div class="contenido">
            <article>
                <p><?php echo $contenido ?></p>
            </article>
        </div>
    </div>
    
</body>
</html>