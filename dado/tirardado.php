<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tiradas</title>
  </head>
  <body>
    <?php

include "clasedado.php";

$tirardado= new jugadordado();

$tirardado->setminnumdado(0);
$tirardado->setmaxnumdado(12);

echo $tirardado=rand($tirardado->getminnumdado(),$tirardado->getmaxnumdado());

     ?>
  </body>
</html>
