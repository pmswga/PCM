<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	class PConst
	{
		
		private $const_name;
		private $const_value;
		
		function __construct(string $const_name, string $const_value)
		{
			$this->const_name = $const_name;
			$this->const_value = $const_value;
		}
		
		public function getConstName() : string
		{
			return $this->const_name;
		}
		
		public function getConstValue() : string
		{
			return $this->const_value;
		}
		
		public function setConstName(string $const_name)
		{
			$this->const_name = $const_name;
		}
		
		public function __toString()
		{
			return "const ".$this->const_name." = ".$this->const_value.";\n";
		}
		
	}
	
?>
