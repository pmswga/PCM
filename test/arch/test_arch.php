<?php
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	
	use PCM\Structures\PClass;
	use PCM\Structures\PVar;
	use PCM\Structures\PConst;
	use PCM\Structures\PMethod;
	
	$class = new PClass(NATIVE_CLASS, "Object");
	
	$var = new PVar("a", PUBLIC_ACCESS, STATIC_VAR);
	$const = new PConst("pi", "3.14");
	$method = new PMethod("it", PUBLIC_ACCESS, NATIVE_METHOD);
	
	
	$class->addVar($var);
	$class->addConst($const);
	$class->addMethod($method);
	
	echo str_replace("\n", "<br>", $class);
	
?>