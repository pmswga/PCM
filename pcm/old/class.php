<?php

	const __ABSTRACT__ = "abstract";
	const __STANDART__ = "standart";

	/*!
		
		\file class.php
		\author Сергей Басыров
		
		\brief Описание класса _Class
		
	*/

	class _Class
	{
        private $name;
        private $superClass;
		private $variables;
		private $methods;
		private $type;
		private $filename;
		
		function _Class($name,  $type = "", $superClass = "")
		{
			$this->name = str_replace(" ", "_", $name);
			$this->superClass = str_replace(" ", "_", $superClass);
			$this->filename = $this->name.".class.php";
			
			if($type == __ABSTRACT__) $this->type = $type;
			elseif($type == __STANDART__) $this->type = $type;
		}
		
		/*!
		
			Массив является двумерным
			
			Пример:
			
			[private]
				[0] Method()
				[1] Method1()
			[public]
				[0] Method2()
				[1] Method3()
		
		*/
		
		public function setArrayVariables($variables)
		{
			$this->variables = $variables;
		}
		
		public function setVariables($type, ...$variablesName)
		{
			if(($type == "public") or ($type == "private") or ($type == "protected"))
			{
				foreach($variablesName as $variable)
					$this->variables[$type][] = $variable;
			} else return false;
		}
		
		public function setArrayMethods($methods)
		{
			$this->methods = $methods;
		}
		
		public function setMethods($type, ...$methodsName)
		{
			if(($type == "public") or ($type == "private") or ($type == "protected"))
			{
				foreach($methodsName as $method)
					$this->methods[$type][] = $method;
			} else return false;
		}
		
		public function getClassName()
		{
			return $this->name;
		}
		
		public function getFilename()
		{
			return $this->filename;
		}
		
		public function getType()
		{
			return $this->type;	
		}
		
		public function getSuperClassName()
		{
			return $this->superClass;
		}
		
		public function getMethods()
		{
			return $this->methods;
		}
		
		public function getVariables()
		{
			return $this->variables;
		}
		
		public function __toString()
		{
			$src = "class ".$this->name."\n";
			$src .= "{\n";
			
			if(!empty($this->variables))
			{
				foreach($this->variables as $vars)
				{
					foreach($vars as $var)
					{
						$src .= "\t".key($this->variables)." ".$var.";\n";
					}
					if(next($this->variables)) $src .= "\n";
				}
			}
			
			$src .= "\n";
			
			if(!empty($this->methods))
			{
				foreach($this->methods as $methods)
				{
					foreach($methods as $method)
					{
						$src .= $method;
					}
					if(next($this->methods)) $src .= "\n";
				}
			}
			
			$src .= "\n}";
			return $src;
		}
		
	}

?>