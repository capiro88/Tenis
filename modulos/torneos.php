<?php
include "../header.php";
include "../menu.php";
include "../config/funciones.php";
?>
<div class="container">
  <div class="row">
    <div class="col-5 mx-auto">
      <div class="mx-auto" style="background-color:white;border-radius:10px; height:490px;padding: 20px 10px;margin-top:40px;">
        <form action="verificar.php" method="post">
          <div  style="text-align:center;margin-bottom:20px;">
            <h4>Ingresa Un nuevo Torneo</h4>
          </div>
          <div class="form-group">
            <label for="nombre_ru">Nombre:</label>
            <input type="text" class="form-control col-8"  name="nombre_t" aria-describedby="emailHelp" placeholder="Nombre Torneo">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Numero de jugadores:</label>
            <select class="form-control col-5" id="exampleFormControlSelect1" name="numero_t">
              <option>16</option>
              <option>32</option>
              <option>64</option>

            </select>
        </div>
        <div class="form-group">
          <label for="start">Fecha de Inicio:</label>
          <input type="date" class="form-control col-5"  name="fechai_t" aria-describedby="emailHelp" placeholder="Fecha Inicio">
        </div>
        <div class="form-group">
          <label for="start">Fecha de Finalizacion:</label>
          <input type="date" class="form-control col-5"  name="fechaf_t" aria-describedby="emailHelp" placeholder="Fecha Finalizacion">
        </div>
        <div class="form-group row">
          <div class=" mx-auto">
            <button type="submit" class="btn btn-primary" name="torneo">Crear Torneo</button>
          </div>
        </div>
      </form>
      <div style="text-align:center; margin-top:5px;">
      <h6><a href="principal.php"><i class="fas fa-arrow-left"></i>Atras</a></h6>
      </div>
      </div>


    </div>
    <div class="col-7 mx-auto">
      <table class="table" style="margin-top:40px;">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Finalizacion</th>
      <th scope="col"># Jugadores</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $mysqli = conectar();
    $id = $_SESSION['idUsuario'];
    $q = $mysqli->query("SELECT * FROM torneos WHERE idUsuario='$id'");
    if(mysqli_num_rows($q)>0){

    while ($r =mysqli_fetch_array($q)) {
       ?>
    <tr>
      <th ><?=$r['nombreTorneo'] ?></th>
      <td><?=$r['fechaI']?></td>
      <td><?=$r['fechaF'] ?></td>
      <td><?=$r['numeroJ'] ?></td>
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




<?php
include "../footer.php";
 ?>
