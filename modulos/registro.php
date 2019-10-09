<?php include "../header.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-4 mx-auto" style="background-color:white;border-radius:10px; height:500px;padding: 20px 10px;margin-top:80px;">
      <form action="confirmar.php" method="post">
        <div  style="text-align:center;margin-bottom:20px;">
          <h4>Registrarme</h4>
        </div>
        <div class="form-group">
          <label for="nombre_ru">Nombre:</label>
          <input type="text" class="form-control" id="nombre_ru" name="nombre_ru" aria-describedby="emailHelp" placeholder="Nombre Usuario">
          </div>
        <div class="form-group">
          <label for="pass_ru">Contraseña:</label>
          <input type="password" class="form-control" id="pass_ru" name="pass_ru" placeholder="contraseña">
        </div>
        <div class="form-group">
          <label for="cpass_ru">Confirme Contraseña:</label>
          <input type="password" class="form-control" id="cpass_ru" name="cpass_ru" placeholder="Confirmar Contraseña">
        </div>
        <div class="form-group">
          <label for="email_ru">Email:</label>
          <input type="email" class="form-control" id="email_ru" name="email_ru" placeholder="Email">
        </div>

        <div class="form-group row">
          <div class=" mx-auto">
          <button type="submit" class="btn btn-primary" name="registro">Registrarme</button>
        </div>
      </div>
      </form>
      <div style="text-align:center; margin-top:5px;">
      <h6><a href="../index.php"><i class="fas fa-arrow-left"></i>Atras</a></h6>
      </div>
    </div>

  </div>

</div>






<?php include "../footer.php"; ?>
