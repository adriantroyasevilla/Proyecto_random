<!-- PHP 7 -->

<?php

function generar_nombre_aleatorio(&$nombres){
	$nombre1 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre2 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre3 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre4 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre5 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre6 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre7 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre8 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre9 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre10 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre11 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre12 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre13 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre14 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre15 = $nombres[ mt_rand(0, count($nombres) -1) ];
	$nombre16 = $nombres[ mt_rand(0, count($nombres) -1) ];
	// $apellidoAleatorio = $apellidos[ mt_rand(0, count($apellidos) -1) ];

    // if($nombreAleatorio != $apellidoAleatorio){

        return "$nombre1 - $nombre2 <br>";
        return "$nombre3 - $nombre4 <br>";
        return "$nombre5 - $nombre6 <br>";
        return "$nombre7 - $nombre8 <br>";
        return "$nombre9 - $nombre10 <br>";
        return "$nombre11 - $nombre12 <br>";
        return "$nombre13 - $nombre14 <br>";
        return "$nombre15 - $nombre16 <br>";
    // }
}
?>

<!-- HTML 5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- header -->
    <header>

    </header>
    <!-- section -->

    <section>
        <article></article>
    </section>
    

<?php


$nombres = ["Jorge", "Julia", "Jose", "Mateo", "Jaume", "Petro", "Alejandro", "Fran","Adri","Lolo","Cristian","Jordi","Luis","David","Tony"];
// $apellidos = ["jorge", "Julia", "Jose", "Mateo", "Jaume", "Petro", "Alejandro", "Fran","Adri","Lolo","Cristian","Jordi","Luis","David","Tony"];
 
$rand = generar_nombre_aleatorio($nombres);
echo $rand; // Salida de ejemplo -> pedro smith pérez
?>


    
    <!-- footer -->

    <footer>
    
    </footer>
</body>
</html>