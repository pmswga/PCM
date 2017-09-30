<?php

	$image = new SimpleXMLElement(file_get_contents("image.xml"));

	foreach ($image->class as $class) {
		
		echo $class['name']."<br>";
		
		if (!empty($class->vars)) {
			
			foreach ($class->vars->var as $var) {
				
				echo "Var: ".$var['name']."<br>";
				
			}
			
			foreach ($class->vars->const as $const) {
				
				echo "Const: ".$const['name']."<br>";
				
			}

		}
		
		if (!empty($class->methods)) {
			
			foreach ($class->methods->method as $method) {
				
				echo "<br>";
				echo "Method: ".$method['name']."<br>";
				
				if (!empty($method->args)) {
					
					foreach ($method->args->arg as $arg) {
						echo "Arg: ".$arg['name']."<br>";
					}
					
				}
				
				echo "Src:".$method->src."<br>";
				
				echo "<br>";
				
			}
			
		}
		
		echo "<hr>";
		
	}

?>