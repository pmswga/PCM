<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/pcm/consts/ptypeaccessright.consts.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/pcm/consts/ptypemethod.consts.php";
	require_once "parg.class.php";
	
	use PCM\Structures\PArg;
	
	class PMethod
	{
		private $access_type;
		private $method_type;
		private $method_name;
		
		private $args;
		private $src;
		
		public function __construct(
			string $method_name, 
			int $access_type,
			int $method_type, 
			array $args = array(),
			string $src = ""
		) {
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
			
			switch($method_type)
			{
				case NATIVE_METHOD:
				{
						$this->method_type = $method_type;
				} break;
				case STATIC_METHOD:
				{
						$this->method_type = $method_type;
				} break;
				case ABSTRACT_METHOD:
				{
						$this->method_type = $method_type;
				} break;
				default: $this->method_type = NATIVE_METHOD;
			}
			
			$this->method_name = $method_name;
			
			if (!empty($args)) {
				
				foreach ($args as $arg) {
					$this->args[$arg] = new PArg($arg);
				}
				
			} else {
				$this->args = array();
			}
			
			$this->src = $src;
		}
		
		public function getMethodName() : string
		{
			return $this->method_name;
		}
		
		public function getAccessType() : int
		{
			return $this->access_type;
		}
		
		public function getMethodType() : int
		{
			return $this->method_type;
		}
		
		public function getArgs() : array
		{
			return $this->args;
		}
		
		public function getArg(string $arg_name) : PArg
		{
			return $this->args[$arg_name];
		}
		
		public function getSrc() : string
		{
			return $this->src;
		}
		
		public function setMethodName(string $method_name)
		{
			$this->method_name = $method_name;
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
		
		public function setMethodType(int $method_type)
		{
			switch($method_type)
			{
				case NATIVE_METHOD:
				{
					$this->method_type = $method_type;
				} break;
				case STATIC_METHOD:
				{
					$this->method_type = $method_type;
				} break;
				case ABSTRACT_METHOD:
				{
					$this->method_type = $method_type;
				} break;
				default: $this->method_type = NATIVE_METHOD;
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
				$this->args[$arg->getArgName()] = $arg;
			}
		}
		
		public function addArg(PArg $arg)
		{
			$this->args[$arg->getArgName()] = $arg;
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
			
			$method_type = "";
			switch($this->method_type)
			{
				case NATIVE_METHOD:
				{
					$method_type = "";
				} break;
				case STATIC_METHOD:
				{
					$method_type = " static ";
				} break;
				case ABSTRACT_METHOD:
				{
					$method_type = "abstract ";
				} break;
				default: $method_type = "";
			}
			
			$lines = explode("\n", $this->src);
			for($i = 0; $i < count($lines); $i++) $lines[$i] = str_replace("\t", "    ", $lines[$i]);
			
      switch ($method_type)
      {
        case "abstract ":
        {
          $code = "\n".$method_type.$access_type." function ".$this->method_name;          
        } break;
        default:
        {
          $code = "\n".$access_type.$method_type." function ".$this->method_name;          
        } break;
      }
			
			$code .= "(";
			foreach($this->args as $arg)
			{
				$code .= $arg;
				if (next($this->args)) $code .= ", ";
			}
			$code .= ")\n";
			
			$code .= "{\n";
			
			foreach($lines as $line)
			{
				$code .= "\t".($line)."\n";
			}
			$code .= "}";
			
			return $code;
		}
		
	}
	
?>
