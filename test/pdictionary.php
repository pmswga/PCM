<?php

	class PDictionary
	{
		
		private $name;
		private $data;
		
		function __construct(string $name)
		{
			$this->name = $name;
			$this->data = array();
		}
		
		public function setName(string $name)
		{
			$this->name = $name;
		}
		
		public function getName() : string
		{
			return $this->name;
		}
		
		public function addEntry(string $key, $value)
		{
			if (!array_key_exists($key, $this->data)) {
				$this->data[$key] = $value;
			} else {
				return false;
			}
		}
		
		public function getEntry(string $key)
		{
			if (array_key_exists($key, $this->data)) {
				return $this->data[$key];
			} else {
				return false;
			}
		}
		
		public function getEntries()
		{
			return $this->data;
		}
		
		public function export()
		{
			$path = $this->name;
			
			if (mkdir($path)) {
				
				file_put_contents($path."/".strtolower($this->name).".dic.php", $this);
				
			} else {
				
				file_put_contents($path."/".strtolower($this->name).".dic.php", $this);
			
			}
		}
		
		public function __toString()
		{
			$code = "";
			
			foreach ($this->data as $key => $value) {
				
				$code .= "const ".$key." = ".$value.";\n";
				
			}
			
			return $code;
		}
		
	}
	
?>