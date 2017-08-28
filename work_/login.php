<?php
  
  require_once "start.php";
  
  use PCM\Users\User;
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    CTools::Redirect("index.php");
    
  } else {
    
    $CT->Show("login.tpl");
    
    if (!empty($_POST['loginUserButton'])) {
      $login = htmlspecialchars($_POST['login']);
      $password = md5(htmlspecialchars($_POST['password']));
      
      if (!empty($login) && !empty($password)) {
        
        try
        {
          
          $_SESSION['user'] = $UM->user($login, $password);          
          CTools::Redirect("index.php");
          
        } catch (Exception $e) {
          CTools::Message($e->getMessage());
        }        
        
      } else {
        CTools::Message("Error");
      }
      
    }
    
  }
  
?>
