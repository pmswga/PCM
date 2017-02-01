<?php
	require_once "start.php";
    
    use PCM\Structures\PClass;
    use PCM\Structures\PVar;
    use PCM\Structures\PConst;
    use PCM\Structures\PMethod;
    use PCM\Classes\PImage;
    
	const THIS = "index.php";
    
    $CT->assign("classes", $_SESSION['classes']);
    $CT->assign("images", $_SESSION['images']);
    $CT->assign("image_code", current($_SESSION['images']));
	$CT->Show("index.tpl");
	
    if (!empty($_POST['create_image_button'])) {
        $image_name = $_POST['image_name'];
        $classes = $_POST['add_class'];
        
        $image = new PImage($image_name);
        
        for ($i = 0; $i < count($classes); $i++) {
            $image->addClasses([$_SESSION['classes'][$classes[$i]]]);
        }
        
        $_SESSION['images'][$image->getName()] = $image;
        
        CTools::Redirect(THIS);
    }
    
    if (!empty($_POST['delete_image_button'])) {
        $select_image = $_POST['select_image'];
        
        for($i = 0; $i < count($select_image); $i++) unset($_SESSION['images'][$select_image[$i]]);
        CTools::Redirect(THIS);
    }
    
    if (!empty($_POST['export_image_button'])) {
        $select_image = $_POST['select_image'];
        
        
        for($i = 0; $i < count($select_image); $i++) $_SESSION['images'][$select_image[$i]]->save();
        
        CTools::Redirect(THIS);
    }
    
    if (!empty($_POST['create_class_button'])) {
        
        $class_name = $_POST['class_name'];
        $class_type = $_POST['class_type'];
        
        $consts_names = $_POST['consts_names'];
        $consts_values = $_POST['consts_values'];
        
        $public_vars = $_POST['public_vars'];
        $private_vars = $_POST['private_vars'];
        $protected_vars = $_POST['protected_vars'];
        
        
        $new_class = new PClass($class_type, $class_name);
        
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
        
        $_SESSION['classes'][$new_class->getClassName()] = $new_class;
        
        CTools::Redirect(THIS);
    }
    
    if (!empty($_POST['delete_class_button'])) {
        $delete_class = $_POST['delete_class'];
        
        for($i = 0; $i < count($delete_class); $i++) unset($_SESSION['classes'][$delete_class[$i]]);
        CTools::Redirect(THIS);
    }
    
?>
