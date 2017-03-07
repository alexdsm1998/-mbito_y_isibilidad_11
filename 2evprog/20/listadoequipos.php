<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Filtrados</title>
  </head>
  <body>
<table border=5>


    <?php
//Conexiones a la base de datos
include "dbNBA.php";
//Comprobacion de $_POST
if (isset($_POST["local"])&&(!empty($_POST["local"]))) {
  $nba=new db();
  $equipo=$nba->devolverEquipos($_POST['local'],$_POST['visitante'],$_POST['temporada']);
  echo "<tr>";
  echo "<td><strong>Equipo local</strong></td>";
  echo "<td><strong>Equipo visitante</strong></td>";
  echo "<td><strong>Temporada</strong></td>";
  echo "</tr>";
while($fila=$equipo->fetch_assoc()){
  echo "<tr>";
  echo "<td>";
  echo "" .$_POST['local'];
    echo "</td>";
      echo "<td>";
  echo "" .$_POST['visitante'];
    echo "</td>";
    echo "<td>";
echo "" .$_POST['temporada'];
  echo "</td>";
  echo "</tr>";
}
}else {
    ?>

<a href="index.php">no se ha enviado nada</a>
<?php
}
     ?>
   </table>
  </body>
</html>
