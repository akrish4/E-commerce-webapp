<?php
$con = mysqli_connect("localhost", "admin", "admin4321", "store")
  or die(mysqli_error($con));
if (!isset($_SESSION)) {
  session_start();
}
