<?php

	require_once "object.class.php";
	
	class Animal extends Object
	{
	
		public $f;
		public $g;
		public $c;
		
		public function helloWorld()
		{
			echo "<h1>Hello World</h1>";
		}
	
	}
	
	$animal = new Animal();
	$animal->helloWorld();

?>
