<?php
	require_once "libs/class.php";
	require_once "libs/method.php";
	session_start();
	
	$class_name = str_replace("#", "", $_POST['classname']);
	
	$class = $_SESSION['classes'][$class_name];
	
	echo $class;
?>