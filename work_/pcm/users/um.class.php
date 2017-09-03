<?php
  declare(strict_types = 1);
  namespace PCM\Users;
  
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/dbc/dbc.class.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/users/user.class.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/classes/pimage.class.php";
  
  use PCM\DataBase\DBC;
  use PCM\Classes\PImage;
  
  const FIELD_LOGIN = 0;
  const FIELD_PASSWORD = 1;
  
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
      4. Получать образы пользователя
      5. Добавлять/удалять образы пользователей
    
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
      
        $add_user_query = $this->dbc()->prepare("INSERT INTO `users` (`email`, `password`, `account_type`, `expiration_date`) VALUES (:email, :passwd, :account_type, ADDDATE(:expiration_date, INTERVAL 30 DAY))");
      
        $add_user_query->bindValue(":email", $user->login());
        $add_user_query->bindValue(":passwd", $user->password());
        $add_user_query->bindValue(":account_type", $user->accountType());
        $add_user_query->bindValue(":expiration_date", $user->expirationDate());
      
        return $add_user_query->execute();
      
      } else {
        return false;
      }
    }
    
    /*!
      \brief Возвращает пользователя по его логину и паролю
      \param[in] $login    - Логин
      \param[in] $password - Пароль
      \exception Exception
      \return Пользователя
      \note Объект класса User
      
      Используется для аутентификации пользователя. Если пользователь присутствует в системе, то возвращается его данные, а иначе возникают исключения
    */
    
    public function user(string $login, string $password) : User
    {
      if (!empty($login) && !empty($password)) {
        $user_data = $this->query(
        "SELECT `email`, `password`, `account_type`, `expiration_date` FROM `users` WHERE `email`=:login AND `password`=:password",[
          ":login" => $login,
          ":password" => $password
        ])[0];
        
        if (!empty($user_data)) {          
          return new User(
            $user_data['email'],
            $user_data['password'],
            (int)$user_data['account_type'],
            $user_data['expiration_date']
          );
        } else {
          throw new \Exception("No such user in DB");
        }
      } else {
        throw new \Exception("Incorrect login or password");
      }
    }
    
    /*!
      \brief
    */
    
    public function addImage(string $login, PImage $image) : bool
    {
      $add_new_image = $this->dbc()->prepare("
        INSERT INTO `user_images` 
        (`id_user`, `caption`, `descp`, `image`) 
        VALUES 
        ((select getUserID(:login)), :caption, :descp, :image)
      ");
      
      $add_new_image->bindValue(":login", $login);
      $add_new_image->bindValue(":caption", $image->getImageName());
      $add_new_image->bindValue(":descp", $image->getImageDescp());
      $add_new_image->bindValue(":image", serialize($image));
      
      return $add_new_image->execute();
    }
    
    /*!
      \brief
    */
    
    public function images(string $login) : array
    {
      if (!empty($login)) {
        
        $db_images = $this->query("SELECT ui.id_user_image, ui.id_user, ui.caption, ui.descp, ui.image FROM `users` u 	INNER JOIN `user_images` ui ON u.id_user=ui.id_user WHERE u.email=:login;", [
          ":login" => $login
        ]);
        
        $images = array();
        foreach ($db_images as $db_image) {
          $images[$db_image['caption']] = unserialize($db_image['image']);
        }
        
        return $images;
      } else {
        throw new \Exception("Login is empty");
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
        $remove_user_query = $this->dbc()->prepare("DELETE FROM `users` WHERE `email`=:user_email");
        return $remove_user_query->execute([
          ":user_email" => $user_email
        ]);
      } else {
        return false;
      }
    }
    
    /*!
      \brief
      \param[in]
      \param[in]
      \param[in]
      \return TRUE - успешно изменён, FALSE - произошла ошибка
    */
    
    public function changeProfilePassword(string $login, string $old_value, string $new_value) : bool
    {
      $change_login_query = $this->dbc()->prepare("UPDATE `users` SET `password`=:new_value WHERE `password`=:old_value AND `email`=:login");
      
      $change_login_query->bindValue(":old_value", $old_value);
      $change_login_query->bindValue(":new_value", $new_value);
      $change_login_query->bindValue(":login", $login);
      
      return $change_login_query->execute();
    }
    
  }
  
?>
