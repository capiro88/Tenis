<?php
include "header.php";
 ?>

<header style="height:90px; text-align:center;background-color:white;border-bottom:1px solid black;">
<h1 style="padding-top:20px;padding-bottom:20px;font-family: 'Lobster', cursive;"><i class="fas fa-table-tennis" ></i> Torneo de Tenis</h1>
</header>

<div class="container" style="margin-top:100px;">
  <div class="row">
    <div class="col-9 mx-auto">
      <div class="mx-auto" style="width: 400px;height: 300px;padding: 50px 20px;border-radius: 10px; background-color:white;">
        <form action="modulos/confirmar.php" method="post">
         <div  style="text-align:center;margin-bottom:20px;">
           <h4>Iniciar Sesion</h4>
         </div>
        <div class="form-group row" >
          <label for="inputEmail3" class="col-3 col-form-label">Email:</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_u">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-3 col-form-label">Contraseña:</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="inputPassword3" placeholder="contraseña" name="pass_u" >
          </div>
        </div>
        <div class="form-group row">
          <div class=" mx-auto">
            <button type="submit" class="btn btn-primary" name="ingreso">Ingresar</button>
          </div>
        </div>
      </form>
      <div style="text-align:center; margin-top:5px;">
      <h6>No tienes una cuenta <a href="modulos/registro.php">!Registrate¡</a></h6>
      </div>
      </div>

    </div>
  </div>
</div>
</body>


<?php

include "footer.php";

 ?>
