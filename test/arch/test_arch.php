<?php
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/classes/pimage.class.php";
	
	use PCM\Classes\PImage;
	use PCM\Structures\PClass;
	use PCM\Structures\PVar;
	use PCM\Structures\PConst;
	use PCM\Structures\PMethod;
	use PCM\Structures\PArg;
	
	$class_a = new PClass("Object");
	$class_b = new PClass("Animal", "Object");
	$class_c = new PClass("Wow", "Object");
	$class_d = new PClass("QObject");
	$class_e = new PClass("QAnimal", "QObject");
	$class_f = new PClass("Cat", "Animal");
	$class_g = new PClass("Dog", "Animal");
	$class_h = new PClass("BDog", "Dog");
	
	// $var = new PVar("a", PUBLIC_ACCESS, STATIC_VAR);
	// $const = new PConst("pi", "3.14");
	// $method = new PMethod("it", PROTECTED_ACCESS, STATIC_METHOD);
	
	// $method->addArgs([
		// new PArg("a", "32", "int"),
		// new PArg("b", "32", "int"),
		// new PArg("c", "32", "int")
	// ]);
	
	
	// $class->addVar($var);
	// $class->addConst($const);
	// $class->addMethod($method);

	// echo str_replace("\n", "<br>", $class->preview());
	
	// echo str_replace("\n", "<br>", $class);
	
	// $image = array(
		// "Object" => array(
			// "supclass" => $class_a,
			// "subclass" => array(
				// "Animal" => array(
					// "supclass" => $class_b,
					// "subclass" => array(
						// "Cat" => array(
							// "supclass" => $class_f,
							// "subclass" => array()
						// )
					// )
				// ),
				// "Wow" => array(
					// "supclass" => $class_c,
					// "subclass" => array()
				// )
			// )
		// )
	// );
	
	// function addClass(PClass $class)
	// {
		// global $image;
		// if (!empty($class->getSuperClassName())) {
			
			// $find_node = function(&$h, $search_class) use (&$find_node) {
				
				// foreach ($h as $class_name => &$node) {
					
					// if ($class_name == $search_class->getSuperClassName()) {
						
						// $new_node = array(
							// "supclass" => $search_class,
							// "subclass" => array()
						// );
						
						// $node['subclass'][$search_class->getClassName()] = $new_node;
						
					// } else {						
						// if (!empty($node['subclass'])) {
							// $find_node($node['subclass'], $search_class);
						// }
					// }
				// }
				
			// };
			
			// $find_node($image, $class);
			
		// } else {
			
			// $new_node = array(
				// "supclass" => $class,
				// "subclass" => array()
			// );
			
			// $image[$class->getClassName()] = $new_node;
			
		// }
	// }
	
	// function removeClass($class_name)
	// {
		// global $image;
		
		// $remove_class = function(&$h, $search_class) use (&$remove_class) {
			
			// if (array_key_exists($search_class, $h)) {
				// unset($h[$search_class]);
			// } else {
				
				// foreach ($h as $class_name => &$node) {
					
					// if (array_key_exists($search_class, $node['subclass'])) {
						// unset($node['subclass'][$search_class]);
					// }
					
					// if (!empty($node['subclass'])) {
						// $remove_class($node['subclass'], $search_class);
					// }
					
				// }
				
			// }
			
		// };
		
		// $remove_class($image, $class_name);
		
	// }
	
	
	// addClass($class_d);
	// addClass($class_e);
	// addClass($class_g);
	// addClass($class_h);
	
	
	$image = new PImage("Smalltalk");
	
	$image->addClass($class_b);
	
	echo "<pre>";
	print_r($image);
	echo "</pre>";
	
?>