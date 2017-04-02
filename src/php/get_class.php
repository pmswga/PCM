<?php
	
	require_once "../start.php";

	switch ((int)$_POST['what']) {
		
		case ALL:
		{
			$class = $_SESSION['tmp_image']->getClass($_POST['class_name']);
			
			$vars = $class->getVars();
			$methods = $class->getMethods();
			
			$json_array = array();
			
			foreach ($vars as $var) {
				$json_array['vars'][] = trim($var->getName());
			}
			
			foreach ($methods as $method) {
				$json_array['methods'][] = trim($method->getName());
			}
			
			echo json_encode($json_array);
			
		} break;
		case METHOD_SOURCE:
		{
			
			echo $_SESSION['tmp_image']->getClass($_POST['class_name'])->getMethod($_POST['method_name'])->getSrc();
			
		} break;
		default:
		{
			echo "nil";
		} break;
	}
	
?>