<?php

	class PDictionary
	{
		private $name;
		private $data;
		
		public function __construct($name)
		{
			$this->name = $name;
		}
		
		public function addEntry($key, $value)
		{
			$this->data[$key] = $value;
		}
		
		public function removeEntry($key)
		{
			unset($this->data[$key]);
		}
		
		public function getData()
		{
			return $this->data;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function sort()
		{
			return ksort($this->data);
		}
	
	}

  $dic = new PDictionary("my");
  
  $dic->addEntry("PI", 3.14);
  $dic->addEntry("Avagadro", 6.02);
  $dic->addEntry("Neper", 2.7);
  
  print_r($dic->getData());
  
?>
