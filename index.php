<?php
	require_once "start.php";
    
	const THIS = "index.php";
	
	$CT->Show("index.tpl");
	
    class A
    {
        const B =32;
    }
    
    if (!empty($_POST['create_image_button'])) {
        $image_name = $_POST['image_name'];
        $classes = $_POST['add_class'];
        
        
    }
    
    if (!empty($_POST['create_class_button'])) {
        $consts_names = $_POST['consts_names'];
        $consts_values = $_POST['consts_values'];
        
        print_r($consts_names);
        print_r($consts_values);
    }
    
?>
