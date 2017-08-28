<?php
  
  require_once "start.php";

  use PCM\Users\User;
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    $CT->assign("user", $_SESSION['user']);
        
    $CT->Show("profile.tpl");
    
  } else {
    
    CTools::Redirect("login.php");
    
  }
  
?>
