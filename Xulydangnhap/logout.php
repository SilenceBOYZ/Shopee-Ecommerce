<?php 
  session_start();
  unset($_SESSION['flat']);
  unset($success_id["id"]);
  session_destroy();
  header('location:../index.php');
?>