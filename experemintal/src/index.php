<?php
  require_once "start.php";

  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PConst;
  use PCM\Structures\PMethod;
  use PCM\Classes\PImage;
	
  const THIS = "index.php";
  
	function viewHierarchia($classes)
  {			
		static $code = "";
		foreach ($classes as $value) {
			$code .= "<ul>";
			if (is_array($value['subclass'])) {
				
				if (!empty($value['supclass'])) {
					$code .= "<li><a href='#".$value['supclass']->getClassName()."'>".$value['supclass']->getClassName()."</a></li>";
				}
				
				viewHierarchia($value['subclass']);
			}
			$code .= "</ul>";
		}
		return $code;
  }

	$classes = $_SESSION['tmp']->getClasses();
	$classHierarchia = $_SESSION['tmp']->getClassHierarchia();
	
	$CT->assign("messageStatus", $_SESSION['messageStatus']);
	$CT->assign("messageHeader", $_SESSION['messageHeader']);
	$CT->assign("messageContent", $_SESSION['messageContent']);
	
	
	$CT->assign("countClasses", count($_SESSION['tmp']->getClasses()));
	
	$countMethods = 0;
	
  if (!empty($classes)) {
    
    foreach ($classes as $class) {
      $countMethods += count($class->getMethods());
    }
    
  }
  
	
	$CT->assign("countMethods", $countMethods);
	
	
	if (!empty($classes)) {		
		$CT->assign("classes", $classes);
	}
	
	if (!empty($classHierarchia)) {
		$CT->assign("classHierarchia", viewHierarchia($classHierarchia));
	}
	
	$CT->show("main.tpl");
	
	unset($_SESSION['messageStatus']);
	unset($_SESSION['messageHeader']);
	unset($_SESSION['messageContent']);
	
	if (!empty($_POST['createClassButton'])) {
		
		$superClass = ($_POST['superClassName'] != "nil") ? $_POST['superClassName'] : "";
		$className = htmlspecialchars($_POST['className']);
		$typeClass = $_POST['typeClass'];
		
		$newClass = new PClass($className, $superClass, $typeClass);
		
		if ($_SESSION['tmp']->addClass($newClass)) {
			$_SESSION['messageStatus'] = "success";
			$_SESSION['messageHeader'] = "Класс успешно создан";
			$_SESSION['messageContent'] = "Класс ".$className." добавлен во временный образ";
		} else {
			$_SESSION['messageStatus'] = "negative";
			$_SESSION['messageHeader'] = "Не удалось создать класс";
			$_SESSION['messageContent'] = "Что-то пошло не так";
		}
		
		CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['removeClassButton'])) {
		$classes = $_POST['selectedClass'];
		
		for ($i = 0; $i < count($classes); $i++) {
			$_SESSION['tmp']->removeClass($classes[$i]);
		}
		
		$_SESSION['messageStatus'] = "warning";
		$_SESSION['messageHeader'] = "Выбранные классы были удалены";
		$_SESSION['messageContent'] = count($classes)." классов было удалено";
		
		CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['createMethodButton'])) {
		
		$class = $_POST['class'];
		$methodName = $_POST['methodName'];
		$methodType = $_POST['methodType'];
		$methodAccessType = $_POST['methodAccessType'];
		$args = (!empty($_POST['methodArgs'])) ? explode(",", $_POST['methodArgs']) : array();
		
		$newMethod = new PMethod($methodName, $methodAccessType, $methodType, $args);
		
		CTools::var_dump($newMethod);
		
		$_SESSION['tmp']->getClass($class)['supclass']->addMethod($newMethod);
		
		$_SESSION['messageStatus'] = "success";
		$_SESSION['messageHeader'] = "Метод успешно создан";
		$_SESSION['messageContent'] = "В класс ".$class." добавлен метод ".$methodName;
		
		CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['removeMethodButton'])) {
    $class = $_POST['class'];
		$selectedMethod = $_POST['selectedMethod'];
    
    for ($i = 0; $i < count($selectedMethod); $i++) {
      $_SESSION['tmp']->getClass();
    }
    
	}
	
	if (!empty($_POST['createVarButton'])) {
		$class = $_POST['class'];
		$varName = $_POST['varName'];
		$varAccessType = $_POST['varAccessType'];
		$varType = $_POST['varType'];
		
		$newVar = new PVar($varName, $varAccessType, $varType);
		
		$_SESSION['tmp']->getClass($class)['supclass']->addVar($newVar);
		
		$_SESSION['messageStatus'] = "success";
		$_SESSION['messageHeader'] = "Свойство успешно создано";
		$_SESSION['messageContent'] = "В класс ".$class." добавлено новое свойство: ".$varName;
		
		CTools::Redirect(THIS);
	}
  
  if (!empty($_POST['createConstButton'])) {
    
    $constName = $_POST['constName'];
    
    
  }
	
?>
