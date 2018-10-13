<?php include "../includes/db.php"; ?>
<?php

if(!isset($_SESSION['username'])){
  header("Location:login");
}

 ?>
