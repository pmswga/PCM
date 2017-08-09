<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  
  if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
    
    $CT->assign("image", $_SESSION['currentImage']);
  
  } else {
    
    echo "Here";
      
    $image = PImage::import("Test.pcm");
    
    echo "<pre>";
    print_r($image);
    echo "</pre>";
    
    $image->generate();
    
  }
  
  // $CT->Show("generate.tpl");
  
?>
