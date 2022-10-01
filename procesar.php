<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aca voy a procesar la informacion</h1>
    <!-- <p>El nombre fue: <b> <?php echo($_GET['nombre']) ?> </b> y su edad es: 
    <b>
        <?php echo($_GET['edad']) ?>
    </b>
    con el numero de DNI:<b></b> su correo electronico es: <b></b> y la pagina web es: <b></b>
    </p> -->
    <!-- <?php 
        foreach ($_GET['generos'] as $genero) {
            # code...
            echo($genero);
            echo('<br>');
        }
        
    ?> -->
    Es una persona del sexo:
    <?php echo($_GET['sexo']) ?>
    que elegio la alternativa:
    <?php echo($_GET['alternativa']) ?>
    y tiene los siguientes gustos musicales:
    <br>
    
        
    <ul>
    <?php
     foreach($_GET['generos'] as $genero){
        echo('<li>');
        echo($genero);
        echo('</li>');
     }
    
    ?>
    </ul>  
</body>
</html>