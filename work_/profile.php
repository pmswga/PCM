<?php
  
  require_once "start.php";

  use PCM\Users\User;
  use PCM\Classes\PImagesManager;
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    $CT->assign("user", $_SESSION['user']);
    
    $images = $UM->images($_SESSION['user']->login());
    
    // CTools::var_dump($images);
    
    $CT->assign("imagesFiles", PImagesManager::scanDir($_SESSION['settings']['General']['image_import_folder']."/*.pcm"));
    $CT->Show("profile.tpl");
    
    if (!empty($_POST['removeAccountButton'])) {
      
      if ($UM->remove($_SESSION['user']->login())) {
        unset($_SESSION['user']);
        CTools::Message("Ваш аккаунт был удалён навсегда");
      } else {
        CTools::Message("Произошла ошибка при удалении аккаунта");
      }
      
      CTools::Redirect("login.php");
      
    }
    
  } else {
    
    CTools::Redirect("login.php");
    
  }
  
?>
