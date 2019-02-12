<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $resultado = $conexion->query("select p.*
                                        from partido p ");
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="stiles.css">
  </head>
  <body>
    <section>
      <article>
          <table border="1" width="70%">
            <br>
            <th>ID Partido</th>
            <th>Equipo Local</th>
            <th>Equipo Visitante</th>
            <th>Resultado</th>
            <?php
                  foreach ($resultado as $partido) {
                  echo "<tr>";
                  echo "<td>".$partido['id_partido']."</td>";
                  echo "<td><a href=equipos.php?equipo=".$partido['local'].">".$partido['local']."</td>";
                  echo "<td>".$partido['visitante']."</td>";
                  echo "<td>".$partido['resultado']."</td>";
                  echo "</tr>";
                }
             ?>
          </table>
        <article>
      </section>
  </body>
</html>
