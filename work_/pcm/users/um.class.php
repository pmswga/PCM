<?php
  declare(strict_types = 1);
  namespace PCM\Users;
  
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/dbc/dbc.class.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/users/user.class.php";
  
  use PCM\DataBaseController\DBC;
  
  /*!
    
    \class UserManager um.class.php "pcm/users/um.class.php"
    \extends DBC
    \brief Менеджер для работы с пользователями
    \author pmswga
    \version 1.0
    
    Задачи менеджера:
      1. Добавлять/удалять пользователей
      2. Изменять информацию об пользователе
      3. Удалять пользователей, срок аккаунта которых истёк
    
  */
  
  class UserManager extends DBC
  {
    
    /*!
      \brief Добавление нового пользователя
      \param[in] $user - Пользователь
      \note Объект класса User
      \return TRUE - успешно добавлен, FALSE - произошла ошибка
    */
    
    public function add($user) : bool
    {
      if (!empty($user) && ($user instanceof User)) {        
        return $add_user_query = $this->query(
          "INSERT INTO `users` (`email`, `password`, `account_type`, `expiration_date`) 
          VALUES
          (:email, :passwd, :account_type, :expiration_date)", [
            ":email" => $user->email(),
            ":passwd" => $user->password(),
            ":account_type" => $user->accountType(),
            ":expiration_date" => $user->expirationDate()
        ]);
      } else {
        return false;
      }
    }
    
    /*!
      \brief Добавление нового пользователя
      \param[in] $user_email - Электронная почта пользователя
      \return TRUE - успешно удалён, FALSE - произошла ошибка
    */
    
    public function remove($user_email) : bool
    {
      if (!empty($user_email)) {        
        return $remove_user_query = $this->query(
          "DELETE FROM `users` WHERE `email`=:user_email",[
            ":user_email" => $user_email
        ]);
      } else {
        return false;
      }
    }
    
  }
  
  
  
?>
