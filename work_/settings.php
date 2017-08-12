<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  $update = function () {
    CTools::Redirect("settings.php");
  };
  
  $CT->assign("session", $_SESSION);
  
  $CT->Show("settings.tpl");
  
  if (!empty($_POST['clearAllImagesButton'])) {
    unset($_SESSION['images']);
    
    $update();
  }
  
  if (!empty($_POST['resetCurrentImageButton'])) {
    unset($_SESSION['currentImage']);
    
    $update();
  }
  
  if (!empty($_POST['removeSelectedImagesButton'])) {
    $images = $_POST['selectImage'];
  
    for ($i = 0; $i < count($images); $i++) {
      unset($_SESSION['images'][$images[$i]]);
    }
    
    $update();
  }
  
  if (!empty($_POST['exportSelectedImagesButton'])) {
    $images = $_POST['selectImage'];
    
    for ($i = 0; $i < count($images); $i++) {
      $_SESSION['images'][$images[$i]]->export($_SESSION['settings']['General']['image_export_folder']);
    }
    
    $update();
  }
  
  if (!empty($_POST['exportAllImagesButton'])) {
    foreach ($_SESSION['images'] as $image_name => $image) {
      $image->export($_SESSION['settings']['General']['image_export_folder']);
    }
    
    $update();
  }
  
?>