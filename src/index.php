<?php
  require_once "start.php";

  use PCM\Structures\PClass;
  use PCM\Structures\PVar;
  use PCM\Structures\PConst;
  use PCM\Structures\PMethod;
  use PCM\Classes\PImage;

  const THIS = "index.php";

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
	
  $CT->Show("index.tpl");
	
  /*! Создание нового класса */
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
          if (!empty($public_vars[$i])) $new_class->addVars([new PVar(_PUBLIC_, $public_vars[$i])]);
      }

      $private_vars = explode(",", $private_vars);
      for ($i = 0; $i < count($private_vars); $i++) {
          if (!empty($private_vars[$i])) $new_class->addVars([new PVar(_PRIVATE_, $private_vars[$i])]);
      }

      $protected_vars = explode(",", $protected_vars);
      for ($i = 0; $i < count($protected_vars); $i++) {
          if (!empty($protected_vars[$i])) $new_class->addVars([new PVar(_PROTECTED_, $protected_vars[$i])]);
      }

      $_SESSION['tmp_image']->addClasses([$new_class]);

      CTools::Redirect(THIS);
  }

  /*! Удаление класса или группы классов */
  if (!empty($_POST['remove_class_button'])) {
    $classes = $_POST['select_class'];

    for ($i = 0; $i < count($classes); $i++) {
      $_SESSION['tmp_image']->removeClass($classes[$i]);
    }

    CTools::Redirect(THIS);
  }

  /*! Создание образа */
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

  /* Удаление временного образа */
  if (!empty($_POST['delete_tmp_image'])) {
    unset($_SESSION['tmp_image']);
    CTools::Redirect(THIS);
  }

  /*! Экспорт выбранных образов */
  if (!empty($_POST['export_image_button'])) {
		$images_name = $_POST['select_image'];

		for ($i = 0; $i < count($images_name); $i++) {
			$_SESSION['images'][$images_name[$i]]->export();
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

	/*! Создание метода */
	if (!empty($_POST['createMethodButton'])) {
		$method_name = htmlspecialchars($_POST['method_name']);
		$method_type = (int)htmlspecialchars($_POST['method_type']);
		$method_class = $_POST['method_class'];
		$method_access_type = (int)$_POST['method_access_type'];
		$method_args = explode(",", $_POST['method_args']);

		$method = new PMethod($method_access_type, $method_name, $method_args);
		$method->setMethodType($method_type);

		$_SESSION['tmp_image']->getClass($method_class)->addMethods([$method]);

    CTools::Redirect(THIS);
	}
	
?>
