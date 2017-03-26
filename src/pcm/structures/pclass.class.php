<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/consts/ptypeclass.consts.php";
	require_once "pvar.class.php";
	require_once "pconst.class.php";
	require_once "pmethod.class.php";
	
	use PCM\Structures\PVar;
	use PCM\Structures\PConst;
	use PCM\Structures\PMethod;
	
	class PClass
	{
		private $name;
		private $superclass_name;
		private $vars;
		private $consts;
		private $methods;
		private $class_type;
		
		function __construct(int $class_type, string $name, string $superclass_name = "")
		{
			$this->name = str_replace(" ", "_", $name);
			$this->superclass_name = str_replace(" ", "_", $superclass_name);
			$this->vars = array();
			$this->consts = array();
			$this->methods = array();
			
			switch($class_type)
			{
				case _ABSTRACT_:
				{
						$this->class_type = $class_type;
				} break;
				case _NATIVE_:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = 1; break;
			}
		}
		
		public function getClassName() : string
		{
			return $this->name;
		}
		
		public function getSuperClassName() : string
		{
			return $this->superclass_name;
		}
		
		public function getVars() : array
		{
			return $this->vars;
		}
		
		public function getVar(string $var_name) : PVar
		{
			return $this->vars[$var_name];
		}
		
		public function getConsts() : array
		{
			return $this->consts;
		}
		
		public function getMethods() : array
		{
			return $this->methods;
		}
		
		public function getClassType() : int
		{
			return $this->class_type;
		}
		
		public function setClassName(string $class_name)
		{
			$this->name = str_replace(" ", "_", $class_name);
		}
		
		public function setSuperClassName(string $subclass)
		{
			$this->name = str_replace(" ", "_", $subclass);
		}
		
		public function setClassType(int $class_type)
		{
			switch($class_type)
			{
				case _ABSTRACT_:
				{
						$this->class_type = $class_type;
				} break;
				case _NATIVE_:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = 1; break;
			}
		}
		
		public function addVars(array $vars)
		{
			foreach($vars as $var)
			{
				if ($var instanceof PVar) {
					$this->vars[$var->getName()] = $var;
					return true;
				}
				else return false;
			}
		}
		
		public function addConsts(array $consts)
		{
			foreach($consts as $const)
			{
				if ($const instanceof PConst) {
					$this->consts[$const->getName()] = $const;
					return true;
				}
				else return false;
			}
		}
		
		public function addMethods(array $methods)
		{
			foreach($methods as $method)
			{
				if ($method instanceof PMethod) {
					$this->methods[$method->getName()] = $method;
					return true;
				}
				else return false;
			}
		}
		
		public function __toString()
		{
			$type = "";
			switch($this->class_type)
			{
				case _ABSTRACT_:
				{
					$type = "abstract ";
				} break;
			}
			
			if (!empty($this->superclass_name)) {
				$code .= "require_once \"".strtolower($this->superclass_name).".class.php\";\n\n";
				$code .= $type."class ".$this->name." extends ".$this->superclass_name."\n";
			} else {              
				$code .= $type."class ".$this->name."\n";
			}
			
			$code .= "{\n";
			
			foreach($this->consts as $const)
			{
				$code .= "\t".$const;
			}
			
			$code .= "\n";
			
			foreach($this->vars as $var)
			{
				$code .= "\t".$var;
			}
			
			foreach($this->methods as $method)
			{
				$lines = explode("\n", (string)$method);
				
				foreach($lines as $line)
				{
						$code .= "\t".$line."\n";
				}
			}
			
			$code .= "\n}";
			
			return $code;
		}
		
	}
    
?>
