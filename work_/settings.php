<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  $update = function () {
    CTools::Redirect("settings.php");
  };
  
  $CT->Show("settings.php");
  
  if (!empty($_POST['clearAllImagesButton'])) {
    unset($_SESSION['images']);
    
    $update();
  }
  
  if (!empty($_POST['resetCurrentImageButton'])) {
    unset($_SESSION['current_image']);
    
    $update();
  }
  
  
?>