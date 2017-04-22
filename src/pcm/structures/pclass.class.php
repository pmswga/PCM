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
		private $class_type;
		private $class_name;
		private $superclass_name;
		
		private $vars;
		private $consts;
		private $methods;
		
		function __construct(string $class_name, string $superclass_name = "", int $class_type = NATIVE_CLASS)
		{
			$this->class_name = str_replace(" ", "_", $class_name);
			$this->superclass_name = str_replace(" ", "_", $superclass_name);
			$this->vars = array();
			$this->consts = array();
			$this->methods = array();
			
			switch($class_type)
			{
				case ABSTRACT_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				case NATIVE_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = NATIVE_CLASS; break;
			}
		}
		
		public function getClassName() : string
		{
			return $this->class_name;
		}
		
		public function getSuperClassName() : string
		{
			return $this->superclass_name;
		}
		
		public function getClassType() : int
		{
			return $this->class_type;
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
		
		public function getConst(string $const_name) : PConst
		{
			return $this->consts[$const_name];
		}
		
		public function getMethods() : array
		{
			return $this->methods;
		}
		
		public function getMethod(string $method_name) : PMethod
		{
			return $this->methods[$method_name];
		}
		
		public function setClassName(string $class_name)
		{
			$this->class_name = str_replace(" ", "_", $class_name);
		}
		
		public function setSuperClassName(string $subclass)
		{
			$this->class_name = str_replace(" ", "_", $subclass);
		}
		
		public function setClassType(int $class_type)
		{
			switch($class_type)
			{
				case ABSTRACT_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				case NATIVE_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = NATIVE_CLASS; break;
			}
		}
		
		public function addVars(array $vars)
		{
			foreach($vars as $var)
			{
				if ($var instanceof PVar) {
					$this->vars[$var->getVarName()] = $var;
					return true;
				}
				else return false;
			}
		}
		
		public function addVar(PVar $var)
		{
			$this->vars[$var->getVarName()] = $var;
		}
		
		public function addConsts(array $consts)
		{
			foreach($consts as $const)
			{
				if ($const instanceof PConst) {
					$this->consts[$const->getConstName()] = $const;
					return true;
				}
				else return false;
			}
		}
		
		public function addConst(PConst $const)
		{
			$this->consts[$const->getConstName()] = $const;
		}
		
		public function addMethods(array $methods)
		{
			foreach($methods as $method)
			{
				if ($method instanceof PMethod) {
					$this->methods[$method->getMethodName()] = $method;
					return true;
				}
				else return false;
			}
		}
		
		public function addMethod(PMethod $method)
		{
			$this->methods[$method->getMethodName()] = $method;
		}
		
		public function preview() : string
		{
			$type = "";
			switch($this->class_type)
			{
				case ABSTRACT_CLASS:
				{
					$type = "abstract ";
				} break;
			}
			
			if (!empty($this->superclass_name)) {
				$code .= $type."class ".$this->class_name." extends ".$this->superclass_name."\n";
			} else {              
				$code .= $type."class ".$this->class_name."\n";
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
		
		public function __toString()
		{
			$type = "";
			switch($this->class_type)
			{
				case ABSTRACT_CLASS:
				{
					$type = "abstract ";
				} break;
			}
			
			if (!empty($this->superclass_name)) {
				$code .= "require_once \"".strtolower($this->superclass_name).".class.php\";\n\n";
				$code .= $type."class ".$this->class_name." extends ".$this->superclass_name."\n";
			} else {              
				$code .= $type."class ".$this->class_name."\n";
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
