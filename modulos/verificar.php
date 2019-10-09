<?php
include "../config/funciones.php";
$mysqli = conectar();
//para agregar torneos
$torneo = $_POST['torneo'];
if(isset($torneo)){
  $nombre = $_POST['nombre_t'];
  $numero = $_POST['numero_t'];
  $fechai =$_POST['fechai_t'];
  $fechaf =$_POST['fechaf_t'];
  $id = $_SESSION['idUsuario'];

$q = $mysqli->query("INSERT INTO torneos(idUsuario,nombreTorneo,fechaI,fechaF,numeroJ) VALUES('$id','$nombre','$fechai','$fechaf','$numero')");

    if(!$q){
         echo "Error: " . $q . "<br>" . mysqli_error($mysqli);

     }
    echo'<script type="text/javascript">
          alert("Tornado agregado correctamente");
          window.location.href="torneos.php";
         </script>';

mysqli_close($mysqli);
}

$jugador = $_POST['jugador'];
if(isset($jugador)){
  $nombre = $_POST['nombre_j'];
  $apellido = $_POST['apellido_j'];
  $edad =$_POST['edad_j'];
  $mano =$_POST['mano_j'];
  $reves= $_POST['reves_j'];
  $estatura =$_POST['estatura_j'];
  $puntos =$_POST['puntos_j'];
  $torneosg =$_POST['torneosg_j'];
  $partidosg =$_POST['partidosg_j'];
  $id =$_SESSION['idUsuario'];

$q2 = $mysqli->query("INSERT INTO jugadores(idUsuario,nombre,apellidos,edad,mano,reves,estatura,puntos,torneosGanados,partidosGanados)
VALUES('$id','$nombre','$apellido','$edad','$mano','$reves','$estatura','$puntos','$torneosg','$partidosg')");

    if(!$q2){
         echo "Error: " . $q2 . "<br>" . mysqli_error($mysqli);

     }
    echo'<script type="text/javascript">
          alert("jugador agregado correctamente");
          window.location.href="jugadores.php";
         </script>';

mysqli_close($mysqli);
}


 ?>
