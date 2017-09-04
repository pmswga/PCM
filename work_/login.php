<?php
  
  require_once "start.php";
  
  use PCM\Users\User;
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
    
    CTools::Redirect("index.php");
    
  } else {
    
    $account_types = $UM->query("SELECT * FROM `account_types`");
    
    $CT->assign("account_types", $account_types);
    
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
    
    if (!empty($_POST['registrationUserButton'])) {
      $sn = htmlspecialchars($_POST['sn']);
      $fn = htmlspecialchars($_POST['fn']);
      $login = htmlspecialchars($_POST['login']);
      $password = md5(htmlspecialchars($_POST['passwd']));
      $retry_password = md5(htmlspecialchars($_POST['retry_password']));
      $account_type = htmlspecialchars($_POST['account_type']);
      
      if (!empty($login) && !empty($password) && !empty($retry_password)) {
        
        if (strcmp($password, $retry_password) === 0) {
          
          $new_user = new User(
            $sn,
            $fn,
            $login,
            $password,
            $account_type,
            date("Y-m-d")
          );
          
          if ($UM->add($new_user)) {
            CTools::Message("Регистрация пользователя с логином: ".$login." прошла успешно");
          } else {
            CTools::Message("Произошла ошибка при регистрации нового пользователя");
          }
          
          CTools::Redirect("login.php");
          
        } else {
          CTools::Message("Пароли не совпадают");
        }
        
      } else {
        CTools::Message("The fields is empty");
      }
      
    }
    
  }
  
?>
