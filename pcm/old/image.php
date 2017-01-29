<?php
	
	require_once "class.php";
	require_once "method.php";
	
	class Image
	{
		private $name;
		private $classes;
		
		function Image($name, ...$classes)
		{
			$this->name = $name;
			foreach($classes as $class)
			{
				$this->classes[$class->getClassName()] = $class;
			}
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getClasses()
		{
			return $this->classes;
		}
		
		public function setClass($name, $class)
		{
			$this->classes[$name] = $class;
		}
		
		public function addClass($class)
		{
			$this->classes[$class->getClassName()] = $class;
		}
		
		public function export()
		{
			$filename = $this->name.".xml";
			
			file_put_contents($filename, '<?xml version="1.0" encoding="utf-8"?>');
			file_put_contents($filename, "\n<image name='".$this->name."'>\n", FILE_APPEND);
			
			foreach($this->classes as $class)
			{
				file_put_contents($filename, "<class name='".$class->getClassName()."' file='".$class->getFilename()."'>\n", FILE_APPEND);
				
				$vars = $class->getVariables();
				$methods = $class->getMethods();
				
				file_put_contents($filename, "<public>\n", FILE_APPEND);
				for($i = 0; $i < count($vars['public']); $i++)
				{
					
					file_put_contents($filename, "<var>", FILE_APPEND);
					file_put_contents($filename, $vars['public'][$i]."", FILE_APPEND);
					file_put_contents($filename, "</var>\n", FILE_APPEND);
					
				}
				for($i = 0; $i < count($methods['public']); $i++)
				{
					file_put_contents($filename, "<method type='".$methods['public'][$i]->getType()."' name='".$methods['public'][$i]->getMethodName()."' args='".implode(",", $methods['public'][$i]->getArgs())."'>", FILE_APPEND);
					file_put_contents($filename, $methods['public'][$i]->getSource()."", FILE_APPEND);
					file_put_contents($filename, "</method>\n", FILE_APPEND);
					
				}
				file_put_contents($filename, "</public>\n", FILE_APPEND);
				
				file_put_contents($filename, "<private>\n", FILE_APPEND);
				for($i = 0; $i < count($vars['private']); $i++)
				{
					
					file_put_contents($filename, "<var>", FILE_APPEND);
					file_put_contents($filename, $vars['private'][$i]."", FILE_APPEND);
					file_put_contents($filename, "</var>\n", FILE_APPEND);
					
				}
				for($i = 0; $i < count($methods['private']); $i++)
				{
					file_put_contents($filename, "<method type='".$methods['private'][$i]->getType()."' name='".$methods['private'][$i]->getMethodName()."' args='".implode(",", $methods['private'][$i]->getArgs())."'>", FILE_APPEND);
					file_put_contents($filename, $methods['private'][$i]->getSource()."", FILE_APPEND);
					file_put_contents($filename, "</method>\n", FILE_APPEND);
					
				}
				file_put_contents($filename, "</private>\n", FILE_APPEND);
				
				file_put_contents($filename, "<protected>\n", FILE_APPEND);
				for($i = 0; $i < count($vars['protected']); $i++)
				{
					
					file_put_contents($filename, "<var>", FILE_APPEND);
					file_put_contents($filename, $vars['protected'][$i]."", FILE_APPEND);
					file_put_contents($filename, "</var>\n", FILE_APPEND);
					
				}
				for($i = 0; $i < count($methods['protected']); $i++)
				{
					file_put_contents($filename, "<method type='".$methods['protected'][$i]->getType()."' name='".$methods['protected'][$i]->getMethodName()."' args='".implode(",", $methods['protected'][$i]->getArgs())."'>", FILE_APPEND);
					file_put_contents($filename, $methods['protected'][$i]->getSource()."", FILE_APPEND);
					file_put_contents($filename, "</method>\n", FILE_APPEND);
					
				}
				file_put_contents($filename, "</protected>\n", FILE_APPEND);
				
				file_put_contents($filename, "</class>\n", FILE_APPEND);
			}
			file_put_contents($filename, "</image>", FILE_APPEND);
		}
	}
	
?>