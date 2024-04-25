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
    <title>Info Pokémon</title>
</head>
<body>
<?php
include "header.html";
?>
<!--todo esto debería meterse en un php para ser rellenado según lo clickeado-->
<section class="w3-center" id="contenedorInfo">
    <div class="w3-margin" id="imagenInfo">
        <img src="#" alt="Imagen Pokémon seleccionado" >
    </div>
    <div class="w3-margin" id="info">
        <div id="tipoNombre">
            <img src="#" alt="Tipo" id="imgTipo">
            <h2>| Nombre del Pokémon</h2>
        </div>
        <div>
            <p>Descripción del Pokémon</p>
        </div>
    </div>
</section>
<?php
include "footer.html";
?>
</body>
</html>