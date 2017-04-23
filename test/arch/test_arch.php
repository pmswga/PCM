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
	
	$image = new PImage("Smalltalk");
	
	$image->addClass($class_a);
	$image->addClass($class_b);
	$image->addClass($class_c);
	$image->addClass($class_d);
	$image->addClass($class_e);
	$image->addClass($class_f);
	$image->addClass($class_g);
	$image->addClass($class_h);
	
	
	
	echo "<hr>";
	$f = $image->getClass("QAnimal");
	$f['supclass']->setClassName("my");
	
	echo "<pre>";
	print_r($f);
	echo "</pre>";
	
	echo "<pre>";
	print_r($image);
	echo "</pre>";
	
?>