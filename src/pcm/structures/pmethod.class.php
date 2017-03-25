<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/consts/ptypeaccessright.consts.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/consts/ptypemethod.consts.php";
	
	class PMethod
	{
		private $name;
		private $access_type;
		private $type;
		private $args;
		private $src;
		
		public function __construct(int $access_type, string $method_name, array $args = array())
		{
			switch($access_type)
			{
				case _PUBLIC_:
				{
						$this->access_type = $access_type;
				} break;
				case _PRIVATE_:
				{
						$this->access_type = $access_type;
				} break;
				case _PROTECTED_:
				{
						$this->access_type = $access_type;
				} break;
				default: $this->access_type = _PRIVATE_;
			}
			$this->name = $method_name;
			$this->args = $args;
			$this->src = "";
		}
		
		public function getName() : string
		{
			return $this->name;
		}
		
		public function getAccessType() : int
		{
			return $this->access_type;
		}
		
		public function getMEthodType() : int
		{
			return $this->type;
		}
		
		public function getArgs() : array
		{
			return $this->args;
		}
		
		public function getSrc() : string
		{
			return $this->src;
		}
		
		public function setName(string $method_name)
		{
			$this->name = $method_name;
		}
		
		public function setAccessType(int $access_type)
		{
			switch($access_type)
			{
				case _PUBLIC_:
				{
						$this->access_type = $access_type;
				} break;
				case _PRIVATE_:
				{
						$this->access_type = $access_type;
				} break;
				case _PROTECTED_:
				{
						$this->access_type = $access_type;
				} break;
				default: $this->access_type = _PRIVATE_;
			}
		}
		
		public function setMethodType(int $type)
		{
			switch($type)
			{
				case NATIVE_METHOD:
				{
						$this->type = $type;
				} break;
				case STATIC_METHOD:
				{
						$this->type = $type;
				} break;
				case ABSTRACT_METHOD:
				{
						$this->type = $type;
				} break;
				default: $this->type = NATIVE_METHOD;
			}
		}
		
		public function setSrc(string $src)
		{
			$this->src = $src;
		}
		
		public function addArgs(array $args)
		{
			foreach($args as $arg)
			{
				$this->args[] = $arg;
			}
		}
		
		public function __toString()
		{
			$type = "";
			switch($this->access_type)
			{
				case _PUBLIC_:
				{
						$type = "public";
				} break;
				case _PRIVATE_:
				{
						$type = "private";
				} break;
				case _PROTECTED_:
				{
						$type = "protected";
				} break;
				default: $type = "private";
			}
			$lines = explode("\n", $this->src);
			for($i = 0; $i < count($lines); $i++) $lines[$i] = str_replace("\t", "    ", $lines[$i]);
			
			$code = "\n".$type." ".$this->name;
			
			$code .= "(";
			foreach($this->args as $arg)
			{
				$code .= "$".$arg;
				if (next($this->args)) $code .= ", ";
			}
			$code .= ")\n";
			
			$code .= "{\n";
			
			$isT = false;
			foreach($lines as $line)
			{
				$code .= "\t".($line)."\n";
			}
			$code .= "\n}";
			
			
			return $code;
		}
		
	}
	
?>
