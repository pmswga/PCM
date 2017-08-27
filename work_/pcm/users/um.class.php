<?php
  declare(strict_types = 1);
  namespace PCM\Users;
  
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/dbc/dbc.class.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/users/user.class.php";
  
  use PCM\DataBaseController\DBC;
  
  class UserManager extends DBC
  {
    
    public function add($user)
    {
      
    }
    
    public function remove($user_email)
    {
      
    }
    
  }
  
  $user = new User(
    "mail@mail",
    "password",
    3,
    "date"
  );
  
  
?>
