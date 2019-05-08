<?php
require "../src/Conexion.php";
require "../src/Proyecto.php";
$p=new Proyecto();
$p->conectar();
$resultado=$p->listarProyectos();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>REGISTRO DE TRABAJADOR</h2>
    <form  action="registro.php" method="post">
      Nombre<br>
      <input type="text" name="nombre" id="nombre" value="" required>
      <br>Apellidos<br>
      <input type="text" name="apellidos" id="apellidos" value="" required>
      <br>Precio Hora<br>
      <input type="number" name="precio_hora" id="precio_hora" value="" required>
      <br>Horas<br>
      <input type="number" name="horas" id="horas" value="" required>
      <br>Evento<br>
      <select class="" name="proyecto" id="proyecto">
        <?php
          foreach ($resultado as $proyecto) {
            $id=$proyecto["id"];
            $nombre=$proyecto["nombre"];
            echo "<option value='$id'>$nombre</option>";
          }
        ?>
      </select>
      <br><br>
      <input type="submit" name="" value="REGISTRAR" onclick="return comp();">
    </form>
  </body>
  <script type="text/javascript" src="js/comprobar.js"></script>
</html>
