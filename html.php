<?php

$animales = ['perro', 'gato', 'perico', 'leon' ] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <?php 
    $i=0  ;
    while($i <= 3 ){
       echo '<h1> Mi animal predilecto es: '.$animales[$i].'</h1>.';
       $i++ ;
    }
 
    ?>

</body>
</html>