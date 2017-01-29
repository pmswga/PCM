<?php

	define(__STATIC_FUNCTION__, "static"); 
	define(__PUBLIC__, "public");
	define(__PRIVATE__, "private");
	define(__PROTECTED__, "protected");


	class _Method
	{

		private $name;
		private $args;
		private $source;
		private $accessType;
		private $type;

		function _Method($name, $accessType, $type = "")
		{
			$this->name = str_replace(" ", "_", $name);
			if(($accessType == __PUBLIC__) || ($accessType == __PRIVATE__) ||
				($accessType == __PROTECTED__)
			)
			{
				$this->accessType = $accessType;
			}
			else return false;
			
			if($type == __STATIC_FUNCTION__) $this->type = $type;
		}
		
		public function setArgs($args)
		{
			$this->args = $args;
		}
		
		public function addArgs($arg)
		{
			$this->args[] = $arg;
		}
		
		public function setSource($source)
		{
			$this->source = $source;	
		}
		
		public function getMethodName()
		{
			return $this->name;
		}
		
		public function getArgs()
		{
			return $this->args;	
		}

		public function getSource()
		{
			return $this->source;	
		}
		
		public function getAccessType()
		{
			return $this->accessType;	
		}
		
		public function getType()
		{
			return $this->type;
		}
		
		public function __toString()
		{
			
			$src = "\t".$this->accessType.$this->type." function ".$this->name."";
			$src .= "(";
			
			foreach($this->args as $arg)
			{
				if(!empty($arg)) $src .= '$'.trim($arg);
				if(next($this->args)) $src .= ", ";
			}
			
			$src .= ")\n";
			$src .= "\t{\n";
			
			$src .= "\t".$this->source;
			
			$src .= "\n\t}\n";
			
			return $src;
		}
	
	
	}
?>
