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
    private $sn;
    private $fn;
    private $login;
    private $password;
    private $account_type;
    private $expiration_date;
    
    function __construct(string $sn,
                         string $fn,
                         string $login,
                         string $password,
                         string $account_type,
                         string $expiration_date
    ) {
      $this->sn = $sn;
      $this->fn = $fn;
      $this->login = $login;
      $this->password = $password;
      $this->account_type = $account_type;
      $this->expiration_date = $expiration_date;
    }
    
    public function secondName() : string
    {
      return $this->sn;
    }
    
    public function firstName() : string
    {
      return $this->fn;
    }
    
    public function login() : string
    {
      return $this->login;
    }
    
    public function password() : string
    {
      return $this->password;
    }
    
    public function accountType() : string
    {
      return $this->account_type;
    }
    
    public function expirationDate() : string
    {
      return $this->expiration_date;
    }
    
  }  
  
?>
