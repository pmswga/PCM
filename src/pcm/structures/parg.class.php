<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	class PArg
	{
		
		private $arg_name;
		private $arg_type;
		private $default_value;
		
		function __construct(
			string $arg_name, 
			string $default_value = "", 
			string $arg_type = ""
		) {
			$this->arg_name = str_replace(" ", "_", trim($arg_name));
			$this->default_value = $default_value;
			$this->arg_type = $arg_type;
		}
		
		public function getArgName() : string
		{
			return $this->arg_name;
		}
		
		public function getArgType() : string
		{
			return $this->arg_type;
		}
		
		public function getArgValue() : string
		{
			return $this->default_value;
		}
		
		public function setArgName(string $arg_name)
		{
			$this->arg_name = $arg_name;
		}
		
		public function setArgType(string $arg_type)
		{
			$this->arg_type = $arg_type;
		}
		
		public function setArgValue(string $default_value)
		{
			$this->default_value = $default_value;
		}
		
		public function __toString()
		{
			$arg_type = (!empty($this->arg_type)) ? $this->arg_type." " : "";
			
			if (!empty($this->default_value)) {
				return $arg_type."$".$this->arg_name." = ".$this->default_value;
			} else {				
				return $arg_type."$".$this->arg_name;
			}
		}
		
	}
	
?>