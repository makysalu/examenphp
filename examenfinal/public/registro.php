<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";
$t=new Trabajador();
//var_dump($_POST);
$error=$t->comprobarCampos($_POST);
if($error){
  echo "<h1>Error de Conexion</h1>";
  echo $error;
}else{
  $t->conectar();
  $t->insertarTrabajador();
  $idTrabajador=$t->ultimoRegistro();
  $t->insertarTrabajadorProyecto($idTrabajador,$_POST["proyecto"],$_POST["horas"]);
  echo "Trabajador introducido";
}
?>
<html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
