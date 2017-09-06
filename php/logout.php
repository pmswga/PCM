<?php
  
  require_once "../start.php";
  
  unset($_SESSION['user']);
  unset($_SESSION['currentImage']);
  unset($_SESSION['images']);
  CTools::Redirect("../login.php");
  
?>