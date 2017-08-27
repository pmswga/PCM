<?php
  
  require_once "start.php";
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    CTools::Redirect("index.php");
    
  } else {
    
    $CT->Show("login.tpl");
    
    if (!empty($_POST['loginUserButton'])) {
      $login = $_POST['login'];
      $password = md5($_POST['password']);
      
      if ($login == "admin" && $password == md5("admin")) {
        
        $_SESSION['user'] = new class ($login, $password)
        {
          private $login;
          private $password;
          
          function __construct($login, $password)
          {
            $this->login = $login;
            $this->password = $password;
          }
          
        };
        
        CTools::Redirect("index.php");
        
      } else {
        CTools::Message("Error");
      }
      
    }
    
  }
  
?>
