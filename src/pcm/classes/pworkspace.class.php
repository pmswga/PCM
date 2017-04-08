<?php
	declare(strict_types = 1);
	namespace PCM\Classes;
	
	class PWorkspace
	{
		
		public static function setClass($class)
		{
			eval($class);
		}
		
		public static function run($code)
		{
			return eval($code);
		}
		
	}

?>