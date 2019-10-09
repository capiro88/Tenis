
<?php
session_start();
extract($_REQUEST);
 function conectar(){
   $mysqli= mysqli_connect('localhost','root','','tenisapp') or die (mysqli_error());
 
   return $mysqli;

}

function redir($a){

header('Location:'.$a);
}


function alert($a){
  ?>
<script type="text/javascript" >
  alert('<?=$a ?>');
</script>
  <?php
}
 ?>
