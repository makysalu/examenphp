<?php
  $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      } else {
        $equipo=$_GET['equipo'];
        $resultado = $conexion->query("select j.*, e.nombre as nombre_equipo
                                        from jugador j join equipo e
                                        on j.equipo=e.id_equipo
                                        where j.equipo=$equipo");
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
            <th>ID Jugador</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Posicion</th>
            <th>ID Capitan</th>
            <th>Fecha Alta</th>
            <th>Salario</th>
            <th>Equipo</th>
            <th>Altura</th>
            <?php
                  foreach ($resultado as $jugador) {
                    if($jugador['posicion']=="Base"){
                      echo "<tr>";
                      echo "<td><strong>".$jugador['id_jugador']."</strong></td>";
                      echo "<td><strong>".$jugador['nombre']."</strong></td>";
                      echo "<td><strong>".$jugador['apellido']."</strong></td>";
                      echo "<td><strong>".$jugador['posicion']."</strong></td>";
                      echo "<td><strong>".$jugador['id_capitan']."</strong></td>";
                      echo "<td><strong>".$jugador['fecha_alta']."</strong></td>";
                      echo "<td><strong>".$jugador['salario']."</strong></td>";
                      echo "<td><strong>".$jugador['nombre_equipo']."</strong></td>";
                      echo "<td><strong>".$jugador['altura']."</strong></td>";
                      echo "</tr>";
                    }
                    else{
                      echo "<tr>";
                      echo "<td>".$jugador['id_jugador']."</td>";
                      echo "<td>".$jugador['nombre']."</td>";
                      echo "<td>".$jugador['apellido']."</td>";
                      echo "<td>".$jugador['posicion']."</td>";
                      echo "<td>".$jugador['id_capitan']."</td>";
                      echo "<td>".$jugador['fecha_alta']."</td>";
                      echo "<td>".$jugador['salario']."</td>";
                      echo "<td>".$jugador['nombre_equipo']."</td>";
                      echo "<td>".$jugador['altura']."</td>";
                      echo "</tr>";}
                }
             ?>
          </table>
        <article>
      </section>
  </body>
</html>
