<?php
  
  require_once "start.php";

  use PCM\Users\User;
  use PCM\Classes\PImagesManager;
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    $CT->assign("user", $_SESSION['user']);
    
    $CT->assign("imagesFiles", PImagesManager::scanDir($_SESSION['settings']['General']['image_import_folder']."/*.pcm"));    
    $CT->Show("profile.tpl");
    
  } else {
    
    CTools::Redirect("login.php");
    
  }
  
?>
