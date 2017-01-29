<?php
	require_once "class.php";
	require_once "method.php";
	
	class Creator 
	{

		public static function generateClass($class)
		{
			$className = $class->getClassName();
			$superClassName = $class->getSuperClassName();
			$variables = $class->getVariables();
			$methods = $class->getMethods();
			$type = $class->getType();
			
			$filename = $className.".php";
				
			file_put_contents($filename, "<?php\n\n");
			
			if($type == __ABSTRACT__) file_put_contents($filename, "\tabstract ", FILE_APPEND);
			else file_put_contents($filename, "\t", FILE_APPEND);
			
			if(empty($superClassName)) file_put_contents($filename, "class ".$className."\n", FILE_APPEND);
			else file_put_contents($filename, "class ".$className." extends ".$superClassName."\n", FILE_APPEND);
			
			file_put_contents($filename, "\t{\n\n", FILE_APPEND);
			if(!empty($variables))
			{
				foreach($variables as $sectionVariables => $section)
				{
					foreach($section as $variable => $var)
						file_put_contents($filename, "\t\t".$sectionVariables." ".$var.";\n", FILE_APPEND);
					file_put_contents($filename, "\n", FILE_APPEND);
				}
			}
			file_put_contents($filename, "\n\t\tfunction ".$className."()\n\t\t{\n\t\t\t//Your code\n\t\t}\n\n", FILE_APPEND);
			if(!empty($methods))
			{
				foreach($methods as $sectionMethods => $methods)
				{
					foreach($methods as $method => $methodName)
						file_put_contents($filename, "\t\t".$sectionMethods." function ".$methodName."()\n\t\t{\n\t\t\t//Your code \n\t\t}\n\n", FILE_APPEND);
					file_put_contents($filename, "\n", FILE_APPEND);
				}
			}
			file_put_contents($filename, "\t}\n", FILE_APPEND);
			file_put_contents($filename, "\n?>", FILE_APPEND);
		}
		
		public static function generateMethod($method)
		{
			
		}

	}
	
?>