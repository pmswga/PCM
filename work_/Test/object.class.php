<?php

	class Object
	{
	
		private $name;
		private $size;
		
		public function getName()
		{
			return $name;
		}
		
		public function setName($new_name)
		{
			$this->name = $new_name;
		}
		
		public function getSize()
		{
			return $size;
		}
		
		public function setSize($size)
		{
			$this->size = $size;
		}
	
	}

?>
