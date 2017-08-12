<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
    
    $CT->assign("image", $_SESSION['currentImage']);
  
  } else {
    
    
    
  }
  
  $CT->Show("generate.tpl");
  
?>
