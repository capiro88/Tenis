<?php
include "../config/funciones.php";
$mysqli= conectar();
$ingreso =$_POST['ingreso'];

// validar ingreso

  if(isset($ingreso)){
    $email = $_POST['email_u'];
    $password =$_POST['pass_u'];

    $q = $mysqli->query("SELECT * FROM usuarios WHERE email='$email' AND contrasena='$password'");
    if (mysqli_num_rows($q)>0){
        $r =mysqli_fetch_array($q);
        $_SESSION['idUsuario'] = $r['idUsuario'];
        redir('principal.php');
    }else {
      echo'<script type="text/javascript">
            alert("Usuario o contraseña incorrectos");
            window.location.href="../index.php";
           </script>';
    }
  mysqli_close($mysqli);
  }


// para verificar y registrar usuarios
$registro = $_POST['registro'];
if(isset($registro)){
  $nombre = $_POST['nombre_ru'];
  $password =$_POST['pass_ru'];
  $cpassword =$_POST['cpass_ru'];
  $email = $_POST['email_ru'];

 $q2 = $mysqli->query("SELECT * FROM usuarios WHERE nombreUsuario='$nombre' or email='$email'");
   if (mysqli_num_rows($q2)>0){
     echo'<script type="text/javascript">
          alert("El nombre usuario o email ya estan en uso");
          window.location.href="registro.php";
          </script>';
   }else{

        if($password == $cpassword){

           $q3 = $mysqli->query("INSERT INTO usuarios(nombreUsuario,contrasena,email) VALUES('$nombre','$password','$email')");
           if(!$q3){
                echo "Error: " . $q3 . "<br>" . mysqli_error($mysqli);

            }
            echo'<script type="text/javascript">
                 alert("El usuario se a registrado con exito");
                 window.location.href="../index.php";
                 </script>';
       }else{
             echo'<script type="text/javascript">
                  alert("Las contraseñas no coinciden");
                  window.location.href="registro.php";
                  </script>';
           }

     }
  mysqli_close($mysqli);
}


 ?>
