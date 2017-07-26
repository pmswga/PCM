<?php
  require_once "start.php";
  
  
  echo "<h1>Образы</h1>";
  
  echo "<pre>";
  var_dump($_SESSION['images']);
  echo "</pre>";
 
 
 
  echo "<hr>";
  echo "<h1>Текущий образ</h1>";
  
  echo "<pre>";
  var_dump($_SESSION['current_image']);
  echo "</pre>";
  
  
  
  
?>