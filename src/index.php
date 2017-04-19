<?php
  require_once "start.php";

  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PConst;
  use PCM\Structures\PMethod;
  use PCM\Classes\PImage;
	
  const THIS = "index.php";
	
	function viewHierarchia(&$classes)
  {
    static $code = "";
    foreach ($classes as $value) {
      $code .= "<ul class='item'>";
      if (is_array($value['childs'])) {
				
				if (!empty($value['class'])) {
					$code .= "<li>".$value['class']->getClassName()."</li>";
				}
				
				viewHierarchia($value['childs']);
      }
      $code .= "</ul>";
    }
    return $code;
  }
	
	$CT->assign("messageStatus", $_SESSION['messageStatus']);
	$CT->assign("messageHeader", $_SESSION['messageHeader']);
	$CT->assign("messageContent", $_SESSION['messageContent']);
	
	$CT->assign("countClasses", count($_SESSION['tmp']->getClasses()));
	
	$CT->assign("classes", $_SESSION['tmp']->getClasses());
  $CT->assign("classHierarchia", viewHierarchia($_SESSION['tmp']->getClassHierarchia()));
	
	$CT->show("main.tpl");
	
	unset($_SESSION['messageStatus']);
	unset($_SESSION['messageHeader']);
	unset($_SESSION['messageContent']);
	
	
	if (!empty($_POST['createClassButton'])) {
		$superClass = ($_POST['superClassName'] != "nil") ? $_POST['superClassName'] : "";
		$className = htmlspecialchars($_POST['className']);
		$typeClass = $_POST['typeClass'];
		
		$newClass = new PClass($typeClass, $className, $superClass);
		
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
		
	}
	
	
	// CTools::var_dump($_SESSION['tmp']);
	
	
	
	
	/*!
	function findImages() : array
	{
		$files = array();
		@$dp = opendir("images");
		
		if (!empty($dp)) {

			while (($dir = readdir($dp)) !== false) {
				
				if ((strcmp($dir, "..") != 0) && (strcmp($dir, ".") != 0)) {	
					$files[] = $dir;
				}
				
			}
			
		}
		
		
		@closedir($dp);
		
		return $files;
	}
	
  function view_hierarchia(&$classes)
  {
    static $code = "";
    foreach ($classes as $value) {
      $code .= "<ul>";
      if (is_array($value['childs'])) {
				if (!empty($value['class'])) {
					$code .= "<li>".$value['class']->getClassName()."</li>";
				}
				
				view_hierarchia($value['childs']);
      }
      $code .= "</ul>";
    }
    return $code;
  }
	
  $CT->assign("classes", $_SESSION['tmp_image']->getClasses());
  $CT->assign("classes_hierarchia", view_hierarchia($_SESSION['tmp_image']->getClassHierarchia()));
  $CT->assign("tmp_image", $_SESSION['tmp_image']);
  $CT->assign("images", $_SESSION['images']);
	$CT->assign("images_files", findImages());
	
  $CT->Show("index.tpl");
	
	
  if (!empty($_POST['create_class_button'])) {

      $class_name = $_POST['class_name'];
      $class_type = $_POST['class_type'];

      $consts_names = $_POST['consts_names'];
      $consts_values = $_POST['consts_values'];

      $public_vars = $_POST['public_vars'];
      $private_vars = $_POST['private_vars'];
      $protected_vars = $_POST['protected_vars'];

      $new_class = new PClass($class_type, $class_name, $_POST['superclass']);
      for ($i = 0; $i < count($consts_names); $i++) {
          $new_class->addConsts([new PConst($consts_names[$i], $consts_values[$i])]);
      }

      $public_vars = explode(",", $public_vars);
      for ($i = 0; $i < count($public_vars); $i++) {
          if (!empty($public_vars[$i])) $new_class->addVars([new PVar(_PUBLIC_, trim($public_vars[$i]))]);
      }

      $private_vars = explode(",", $private_vars);
      for ($i = 0; $i < count($private_vars); $i++) {
          if (!empty($private_vars[$i])) $new_class->addVars([new PVar(_PRIVATE_, trim($private_vars[$i]))]);
      }

      $protected_vars = explode(",", $protected_vars);
      for ($i = 0; $i < count($protected_vars); $i++) {
          if (!empty($protected_vars[$i])) $new_class->addVars([new PVar(_PROTECTED_, trim($protected_vars[$i]))]);
      }

      $_SESSION['tmp_image']->addClasses([$new_class]);

      CTools::Redirect(THIS);
  }

	
  if (!empty($_POST['remove_class_button'])) {
    $classes = $_POST['select_class'];

    for ($i = 0; $i < count($classes); $i++) {
      $_SESSION['tmp_image']->removeClass($classes[$i]);
    }

    CTools::Redirect(THIS);
  }

	
  if (!empty($_POST['create_image_button'])) {
    $image_name = $_POST['image_name'];
    $classes = array_reverse($_POST['add_class']);

    $image = new PImage($image_name);

    for ($i = 0; $i < count($classes); $i++) {
			
			$c = $_SESSION['tmp_image']->getClass($classes[$i]);
			
			$image->addClasses([$_SESSION['tmp_image']->getClass($classes[$i])]);
    }

    $_SESSION['images'][$image->getImageName()] = $image;
		
    CTools::Redirect(THIS);
  }

	
  if (!empty($_POST['delete_tmp_image'])) {
    unset($_SESSION['tmp_image']);
    CTools::Redirect(THIS);
  }

	
  if (!empty($_POST['export_image_button'])) {
		$images_name = $_POST['select_image'];

		for ($i = 0; $i < count($images_name); $i++) {
			$_SESSION['images'][$images_name[$i]]->export();
		}

    CTools::Redirect(THIS);
  }
	
	if (!empty($_POST['importImageButton'])) {
		$images = $_POST['image_file'];
		
		for ($i = 0; $i < count($images); $i++) {
			$new_image = PImage::import($images[$i]);
			
			$_SESSION['images'][$new_image->getImageName()] = $new_image;
			
		}
		
    CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['delete_image_button'])) {
		$images_name = $_POST['select_image'];

		for ($i = 0; $i < count($images_name); $i++) {
			unset($_SESSION['images'][$images_name[$i]]);
		}
		
    CTools::Redirect(THIS);
	}

	
	if (!empty($_POST['createMethodButton'])) {
		$method_name = htmlspecialchars($_POST['method_name']);
		$method_type = (int)htmlspecialchars($_POST['method_type']);
		$method_class = $_POST['method_class'];
		$method_access_type = (int)$_POST['method_access_type'];
		
		if (!empty($_POST['method_args'])) {			
			$method_args = explode(",", $_POST['method_args']);
		} else {
			$method_args = array();
		}
		
		$method = new PMethod($method_access_type, $method_name, $method_args);
		$method->setMethodType($method_type);

		$_SESSION['tmp_image']->getClass($method_class)->addMethods([$method]);

    CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['editCodeButton'])) {
		$class_name = $_POST['for_class'];
		$method_name = $_POST['for_method'];
		$code = $_POST['code'];
		
		$_SESSION['tmp_image']->getClass($class_name)->getMethod($method_name)->setSrc($code);
		
    CTools::Redirect(THIS);
	}
	
	if (!empty($_POST['generateImageButton'])) {
		$image_name = $_POST['changeImageForGenerate'];
		$_SESSION['images'][$image_name]->generate();
	}
	
	*/
	
?>
