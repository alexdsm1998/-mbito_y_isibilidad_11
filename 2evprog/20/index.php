<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partidos</title>
  </head>
  <body>
    <form  action="filtrado.php" method="post">


      Equipo local<br>
      <select name="local">
      <?php
include "dbNBA.php";
$nba=new db();
$resultado1=$nba->todosEquipos();
while($fila=$resultado1->fetch_assoc()){
  echo "<option value='" .$fila["equipo_local"]."' > ".$fila["equipo_local"]."</option>";
}
       ?>
    </select><br>



      Equipo visitante<br>
  <select name="visitante">
    <?php
    $resultado1=$nba->todosEquipos();
    while($fila=$resultado1->fetch_assoc()){
      echo "<option value='" .$fila["equipo_local"]."'>".$fila["equipo_local"]."</option>";
    }
     ?>
     </select><br>



          Temporada<br>
          <select name="temporada">
<?php
$resultado2=$nba->devolverTemporada();
while($fila=$resultado2->fetch_assoc()){
  echo "<option value='" .$fila["temporada"]."'>".$fila["temporada"]."</option>";
}
 ?>
        </select><br>
        <input type="submit"  value="FILTRAR">

</form>
  </body>
</html>
