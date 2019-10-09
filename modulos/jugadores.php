<?php
include "../header.php";
include "../menu.php";
include "../config/funciones.php";
?>

<div class="container" >
  <div class="row">
    <div class="col-4 mx-auto">
      <div class="mx-auto" style="background-color:white;border-radius:10px; height:1000px;padding: 20px 10px;margin-top:40px;">
        <form action="verificar.php" method="post">
          <div  style="text-align:center;margin-bottom:20px;">
            <h4>Ingresa Un nuevo Jugador</h4>
          </div>
          <div class="form-group">
            <label for="nombre_ru">Nombre:</label>
            <input type="text" class="form-control col-10"  name="nombre_j" aria-describedby="emailHelp" placeholder="Nombres">
          </div>
          <div class="form-group">
            <label for="nombre_ru">Apellidos:</label>
            <input type="text" class="form-control col-10"  name="apellido_j" aria-describedby="emailHelp" placeholder="Apellidos">
          </div>
          <div class="form-group">
            <label for="nombre_ru">Edad:</label>
            <input type="text" class="form-control col-10"  name="edad_j" aria-describedby="emailHelp" placeholder="Edad">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Mano:</label>
            <select class="form-control col-10" id="exampleFormControlSelect1" name="mano_j" >
              <option>Derecha</option>
              <option>Izquierda</option>


            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Reves:</label>
          <select class="form-control col-10" id="exampleFormControlSelect1" name="reves_j">
            <option>a una mano</option>
            <option>a dos manos</option>

          </select>
      </div>

          <div class="form-group">
            <label for="nombre_ru">estatura:</label>
            <input type="text" class="form-control col-10"  name="estatura_j" aria-describedby="emailHelp" placeholder="Estatura">
          </div>
          <div class="form-group">
            <label for="nombre_ru">Puntos:</label>
            <input type="text" class="form-control col-10"  name="puntos_j" aria-describedby="emailHelp" placeholder="Puntos">
          </div>
          <div class="form-group">
            <label for="nombre_ru">Torneos Ganados:</label>
            <input type="text" class="form-control col-10"  name="torneosg_j" aria-describedby="emailHelp" placeholder="Torneos Gandos">
          </div>
          <div class="form-group">
            <label for="nombre_ru">Partidos Ganados:</label>
            <input type="text" class="form-control col-10"  name="partidosg_j" aria-describedby="emailHelp" placeholder="Partidos Ganados">
          </div>
        <div class="form-group row">
          <div class=" mx-auto">
            <button type="submit" class="btn btn-primary" name="jugador">Agregar Jugador</button>
          </div>
        </div>
      </form>
      <div style="text-align:center; margin-top:5px;">
      <h6><a href="principal.php"><i class="fas fa-arrow-left"></i>Atras</a></h6>
      </div>
      </div>


    </div>
    <div class="col-8 mx-auto">
      <table class="table" style="margin-top:40px;">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">edad</th>
      <th scope="col">Estatura</th>
      <th scope="col">Mano</th>
      <th scope="col">Torneos Ganados</th>
      <th scope="col">Partidos Ganados</th>


    </tr>
  </thead>
  <tbody>
    <?php
    $mysqli = conectar();
    $id = $_SESSION['idUsuario'];
    $q = $mysqli->query("SELECT * FROM jugadores WHERE idUsuario='$id'");
    if(mysqli_num_rows($q)>0){

    while ($r =mysqli_fetch_array($q)) {
       ?>
    <tr>
      <td ><?=$r['nombre'] ?></td>
      <td><?=$r['apellidos']  ?></td>
      <td><?=$r['edad']?></td>
      <td><?=$r['estatura'] ?> cm</td>
      <td><?=$r['mano'] ?></td>
      <td><?=$r['torneosGanados'] ?></td>
      <td><?=$r['partidosGanados'] ?></td>
    </tr>
<?php }
}
mysqli_close($mysqli);
?>
  </tbody>
</table>

    </div>

  </div>

</div>

<?php include "../footer.php"; ?>
