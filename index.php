<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PMethod;
  use PCM\Users\User;
  
  // CTools::var_dump($_SESSION['images']);
  
  if (isset($_SESSION['user']) && ($_SESSION['user'] instanceof User)) {
  
    $update = function () {
      CTools::Redirect("index.php");
    };
    
    if (empty($_SESSION['currentImage'])) {
      setMessage("Не выбран образ по умолчанию", "negative");
    } else {
      
      $CT->assign("currentImage", $_SESSION['currentImage']->getImageName());
      $CT->assign("image", $_SESSION['currentImage']);
      
      $classes = $_SESSION['currentImage']->getClasses();
      $countOfClasses = count($classes);
      
      if ($countOfClasses > 0) {
        
        $countOfMethods = 0;
        $countOfVars = 0;
        
        foreach ($classes as $class) {
          $countOfMethods += count($class->getMethods());
          $countOfVars += count($class->getVars());
        }
        
        $CT->assign("countOfClasses", $countOfClasses);
        $CT->assign("countOfMethods", $countOfMethods);
        $CT->assign("countOfVars", $countOfVars);
        
      } else {
        setMessage("Не удалость подвести статистику образа, так как в нём отсутствуют классы", "warning");
      }
      
      $CT->assign("classHierarchia", $_SESSION['currentImage']->getClassHierarchia());
      $CT->assign("classes", $classes);
      
    }
    
    $_SESSION['images'] = $UM->images($_SESSION['user']->login());
    
    $CT->assign("profile", $_SESSION['user']);
    $CT->assign("images", $_SESSION['images']);
    
    $CT->assign("msgs", $_SESSION['msgs']);
    $CT->Show("index.tpl");

    unsetMessage();
    
    if (!empty($_POST['createImageButton'])) {
      
      $imageName = $_POST['imageName'];
      $imageDescp = $_POST['imageDescp'];
      
      if (!empty($imageName)) {
        $newImage = new PImage($imageName, $imageDescp);
        
        if ($UM->addImage($_SESSION['user']->login(), $newImage)) {          
          setMessage("Образ ".$imageName." был успешно создан", "success");
        } else {
          setMessage("Произошла ошибка при создании образа", "negative");
        }
        
      } else {
        setMessage("Невозможно создать безымянный образ", "negative");
      }
      
      $update();
    }
    
    if (!empty($_POST['selectCurrnetImageButton'])) {
      $currentImage = $_POST['currentImage'];
      
      if (array_key_exists($currentImage, $_SESSION['images'])) {
        $_SESSION['currentImage'] = $_SESSION['images'][$currentImage];
        setMessage("Образ ".$currentImage." был выбран в качестве по умолчанию", "info");
      } else {
        setMessage("Невозможно выбрать несуществующий образ", "negative");
      }
      
      $update();
    }
    
    if (!empty($_POST['createClassButton'])) {
      
      if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
        
        $superClass = ($_POST['superClassName'] != "nil") ? $_POST['superClassName'] : "";
        $className = htmlspecialchars($_POST['className']);
        $typeClass = $_POST['typeClass'];
      
        if (!empty($className)) {
          $newClass = new PClass($className, $superClass, $typeClass);
        
          if ($_SESSION['currentImage']->addClass($newClass)) {
            setMessage("Класс ".$className." был успешно создан", "success");
          } else {
            setMessage("Произошла ошибка при создании класса ".$className, "negative");
          }
          
        } else {
          setMessage("Невозможно создать безымянный класс", "warning");
        }      

      } else {
        setMessage("Невозможно создать класс в пустом образе", "warning");
      }
      
      $update();
    }
    
    if (!empty($_POST['createVarButton'])) {
      
      if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
      
        $className = $_POST['class'];
        $varName = $_POST['varName'];
        $varAccessType = $_POST['varAccessType'];
        $varType = $_POST['varType'];
        
        if (!empty($varName)) {          
          $_SESSION['currentImage']->getClass($className)['supclass']->addVar(new PVar($varName, $varAccessType, $varType));
          
          setMessage("Свойство ".$varName." было добавлено в класс ".$className, "success");
          
        } else {
          setMessage("Вы не можете создать безымянное свойство", "negative");
        }
        
      } else {
        setMessage("Невозможно создать свойство в пустом образе", "warning");
      }
      
      $update();
    }
    
    if (!empty($_POST['createMethodButton'])) {
      
      if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
        
        $class = $_POST['class'];
        $methodName = $_POST['methodName'];
        $methodType = $_POST['methodType'];
        $methodAccessType = $_POST['methodAccessType'];
        $args = (!empty($_POST['methodArgs'])) ? explode(",", $_POST['methodArgs']) : array();
        
        if (!empty($methodName) && !empty($class)) {          
          $newMethod = new PMethod($methodName, $methodAccessType, $methodType, $args);
          
          $class_ = $_SESSION['currentImage']->getClass($class)['supclass'];
          
          if (!empty($class_)) {            
            $class_->addMethod($newMethod);
            setMessage("Метод ".$methodName." был добавлено в класс ".$class, "success");
          } else {
            setMessage("Произошла ошибка при добавлении метода в класс ".$class, "negative");
          }
          
        } else {
            setMessage("Произошла ошибка при добавлении метода в класс ".$class, "negative");
        }
        
      } else {
        setMessage("Невозможно создать метод в пустом образе", "warning");
      }
      
      $update();
    }
    
    if (!empty($_POST['saveCodeMethodButton'])) {
      
      if (!empty($_SESSION['currentImage']) && ($_SESSION['currentImage'] instanceof PImage)) {
        
        $editClass = $_POST['editClass'];
        $editMethod = $_POST['editMethod'];
        $src = $_POST['src'];
        
        if (!empty($_SESSION['currentImage'])) {
          
          $class = $_SESSION['currentImage']->getClass($editClass)['supclass'];
          if (!empty($class)) {
            $class->getMethod($editMethod)->setSrc($src);            
            setMessage("Исходный код метода был сохранён в ".$editClass." в ".$editMethod."()", "success");
          } else {            
            setMessage("Не возможно сохранить исходный код метода", "negative");
          }
          
        } else {
          setMessage("Не возможно сохранить исходный код метода", "negative");
        }
        
      }
      
      $update();
    }
    
    if (!empty($_POST['generateImageButton'])) {
      $_SESSION['currentImage']->generate();
    }
    
    /*! Work with Profile */
    
    if (!empty($_POST['changeProfilePasswordButton'])) {
      $oldPassword = md5(htmlspecialchars($_POST['oldPassword']));
      $newPassword = md5(htmlspecialchars($_POST['newPassword']));
      
      if ($UM->changeProfilePassword($_SESSION['user']->login(), $oldPassword, $newPassword)) {
        setMessage("Пароль был успешно изменён", "success");
      } else {
        setMessage("Не удалось изменить пароль", "negative");
      }
      
      $update();
    }
    
    if (!empty($_POST['removeAccountButton'])) {
      
      if ($UM->remove($_SESSION['user']->login())) {
        unset($_SESSION['user']);
        unset($_SESSION['currentImage']);
        unset($_SESSION['images']);
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
