<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/consts/ptypeaccessright.consts.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/consts/ptypevar.consts.php";
	
	class PVar
	{
		
		private $access_type;
		private $var_type;
		private $var_name;
		
		function __construct(string $var_name, int $access_type = PRIVATE_ACCESS, int $var_type = NATIVE_VAR)
		{
			switch ($access_type)
			{
				case PUBLIC_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				case PRIVATE_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				case PROTECTED_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				default: $this->access_type = PRIVATE_ACCESS;
			}
			
			switch ($var_type)
			{
				case NATIVE_VAR:
				{
					$this->var_type = $var_type;
				} break;
				case STATIC_VAR:
				{
					$this->var_type = $var_type;
				} break;
				default: $this->var_type = NATIVE_VAR; break;
			}
			
			$this->var_name = $var_name;
		}
		
		public function getVarName() : string
		{
			return $this->var_name;
		}
		
		public function getAccessType() : int
		{
			return $this->type;
		}
		
		public function getVarType() : int
		{
			return $this->var_type;
		}
		
		public function setVarName(string $var_name)
		{
			$this->var_name = $var_name;
		}
		
		public function setAccessType(int $access_type)
		{
			switch($access_type)
			{
				case PUBLIC_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				case PRIVATE_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				case PROTECTED_ACCESS:
				{
					$this->access_type = $access_type;
				} break;
				default: $this->access_type = PRIVATE_ACCESS;
			}
		}
		
		public function __toString()
		{
			$access_type = "";
			switch($this->access_type)
			{
				case PUBLIC_ACCESS:
				{
						$access_type = "public";
				} break;
				case PRIVATE_ACCESS:
				{
						$access_type = "private";
				} break;
				case PROTECTED_ACCESS:
				{
						$access_type = "protected";
				} break;
				default: $access_type = "private";
			}
			
			$var_type = "";
			switch ($this->var_type)
			{
				case NATIVE_VAR:
				{
					$var_type = "";
				} break;
				case STATIC_VAR:
				{
					$var_type = " static";
				} break;
				default: $var_type = ""; break;
			}
			
			return $access_type.$var_type." $".trim($this->var_name).";\n";
		}
		
	}
	
?>
