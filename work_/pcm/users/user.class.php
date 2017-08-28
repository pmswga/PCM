<?php
  declare(strict_types = 1);
  namespace PCM\Users;
  
  /*!
    
    \class User user.class.php "pcm/users/user.class.php"
    \brief Описывает собой сущность - Пользователь
    \author pmswga
    \version 1.0
    
  */
  
  class User
  {
    private $login;
    private $password;
    private $account_type;
    private $expiration_date;
    
    function __construct(string $login,
                         string $password,
                         int $account_type,
                         string $expiration_date
    ) {
      $this->login = $login;
      $this->password = $password;
      $this->account_type = $account_type;
      $this->expiration_date = $expiration_date;
    }
    
    public function login() : string
    {
      return $this->login;
    }
    
    public function password() : string
    {
      return $this->password;
    }
    
    public function accountType()
    {
      return $this->account_type;
    }
    
    public function expirationDate()
    {
      return date_format(new \DateTime($this->expiration_date), "d.m.Y");
    }
    
  }  
  
?>
