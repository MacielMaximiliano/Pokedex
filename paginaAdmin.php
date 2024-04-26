<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style/estilosVistas.css">
    <link rel="icon" href="/img/pokebolaLogo.png" type="image/png">
    <title>Home</title>
</head>
<body class="w3-light-grey">
<div class="w3-container w3-center" id="contenedorHeader">
    <div id="header">
        <?php
        include "header.html";
        ?>
    </div>
    <div id="user">
        <?php
        session_start();
        if(isset($_SESSION["usuario"])){
            echo $_SESSION["usuario"];
        }else{
            header("location:paginaPrincipal.php?error=1");
            exit();
        }
        ?>
    </div>
</div>

<div class="w3-container w3-center w3-margin">
    <form action="#" method="get">
        <input type="text" name="buscador" id="buscador" placeholder="Ingrese nombre, tipo o numero de pokémon">
        <input type="submit" name="buscar" id="buscar" value="¿Quién es ese pokemon?">
    </form>
</div>
<div class="w3-margin">
    <table class="w3-table w3-bordered">
        <thead>
        <tr class="w3-dark-grey">
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Número</th>
            <th>Nombre</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><img src="#" alt="Imagen 1" class="imagenTabla"></td>
            <td>Tipo 1</td>
            <td>123</td>
            <td><a href="paginaDeVisualizacion.php">Nombre 1</a></td>
        </tr>
    </table>
</div>
<?php
include "ConsultarBdPokemon.php";
include "footer.html";
?>
</body>
</html>