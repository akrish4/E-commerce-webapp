<?php
    $con = mysqli_connect("localhost", "admin", "admin4321", "store","8000")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
