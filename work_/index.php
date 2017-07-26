<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  $update = function () {
    CTools::Redirect("index.php");
  };
  
  if (empty($_SESSION['images']) or empty($_SESSION['current_image'])) {
    
    $CT->assign("images", $_SESSION['images']);
    if (!empty($_SESSION['current_image'])) {
      $CT->assign("current_image", $_SESSION['current_image']->getImageName());
    }
    
    $CT->Show("create_image.tpl");
    
    if (!empty($_POST['createImageButton'])) {
      
      $imageName = htmlspecialchars($_POST['imageName']);
      
      if (!empty($imageName)) {        
        $_SESSION['images'][$imageName] = new PImage($imageName);      
        $update();
      } else {
        CTools::Message("Невозможно создать образ");
      }

    }
    
    if (!empty($_POST['selectImageButton'])) {
      
      $imageName = htmlspecialchars($_POST['imageName']);
      
      $_SESSION['current_image'] = $imageName;
      
      $update();
    }
    
  } else {
    
    
    
    $CT->Show("index.tpl");
    
  }
  
  
?>