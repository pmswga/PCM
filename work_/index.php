<?php
  
  require_once "start.php";
  
  use PCM\Classes\PImage;
  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PMethod;
  
  $update = function () {
    CTools::Redirect("index.php");
  };
  
	function viewHierarchia($classes)
  {			
		static $code = "";
		foreach ($classes as $value) {
			$code .= "<ul>";
			if (is_array($value['subclass'])) {
				
				if (!empty($value['supclass'])) {
					$code .= "<li><a href='#".$value['supclass']->getClassName()."' class='class'>".$value['supclass']->getClassName()."</a></li>";
				}
				
				viewHierarchia($value['subclass']);
			}
			$code .= "</ul>";
		}
		return $code;
  }
  
  
  
  
  if (empty($_SESSION['currentImage'])) {
    setMessage("Не выбран образ по умолчанию", "danger");
  } else {
    
    $CT->assign("currentImage", $_SESSION['currentImage']->getImageName());
    $CT->assign("countOfClasses", count($_SESSION['currentImage']->getClasses()));
    
    $classHierarchia = $_SESSION['currentImage']->getClassHierarchia();
    $CT->assign("classHierarchia", viewHierarchia($classHierarchia));
    $CT->assign("classes", $_SESSION['currentImage']->getClasses());
    
  }
  
  

  $CT->assign("images", $_SESSION['images']);
  
  $CT->assign("msgs", $_SESSION['msgs']);
  $CT->Show("index.tpl");

  unsetMessage();
  
  if (!empty($_POST['createImageButton'])) {
    
    $imageName = $_POST['imageName'];
    
    if (!empty($imageName)) {
      $_SESSION['images'][$imageName] = new PImage($imageName);
      setMessage("Образ ".$imageName." был успешно создан", "success");
    } else {
      setMessage("Невозможно создать безымянный образ", "danger");
    }
    
    $update();
  }
  
  if (!empty($_POST['selectCurrnetImageButton'])) {
    $currentImage = $_POST['currentImage'];
    
    if (array_key_exists($currentImage, $_SESSION['images'])) {
      $_SESSION['currentImage'] = $_SESSION['images'][$currentImage];
      setMessage("Образ ".$currentImage." был выбран в качестве по умолчанию", "info");
    } else {
      setMessage("Невозможно выбрать несуществующий образ", "danger");
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
          setMessage("Произошла ошибка при создании класса ".$className, "danger");
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
      
      $_SESSION['currentImage']->getClass($className)['supclass']->addVar(new PVar($varName, $varAccessType, $varType));
      
      setMessage("Свойство ".$varName." было добавлено в класс ".$className, "success");
      
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
      
      $newMethod = new PMethod($methodName, $methodAccessType, $methodType, $args);
      
      $_SESSION['currentImage']->getClass($class)['supclass']->addMethod($newMethod);
      
      setMessage("Метод ".$methodName." был добавлено в класс".$class, "success");
      
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
      
      $_SESSION['currentImage']->getClass($editClass)['supclass']->getMethod($editMethod)->setSrc($src);
      
    }
    
  }
  
  
?>