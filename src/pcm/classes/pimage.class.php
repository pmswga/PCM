<?php
	declare(strict_types = 1);
	namespace PCM\Classes;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	
	use PCM\Structures\PClass;
	
	class PImage
	{
		private $name;
		private $classes;
		private $class_hierarchia;
		private $file_names_of_classes;
		
		public function __construct(string $name, array $classes = array())
		{
			$this->name = str_replace(" ", "_", $name);
			$this->classes = array();
			$this->file_names_of_classes = array();
			$this->class_hierarchia = array();
			
			foreach ($classes as $class) {
					if ($class instanceof PClass) {
						$this->classes[$class->getClassName()] = $class;
						$this->file_names_of_classes[$class->getClassName()] = strtolower($class->getClassName().".class.php");
					}
					else return false;
			}
			
			$this->generateHierarchia();
		}
		
		private function addToHierarchia(&$myArray, $root, $class)
		{
			if (!empty($root) && !empty($class)) {
				foreach ($myArray as $key => &$value) {
					
					if (is_array($value)) {
						$this->addToHierarchia($value, $root, $class);
						
						if($key == $root) {
							$value[$class] = array();
						}
					}
				}
			}
			else $myArray[$class] = array();
		}
		
		public function generateHierarchia()
		{
			if (!empty($this->classes)) {
				foreach ($this->classes as $class) {
					$this->addToHierarchia($this->class_hierarchia, $class->getSuperClassName(), $class->getClassName());
				}
			}
		}
		
		public function getName() : string
		{
				return $this->name;
		}
		
		public function getClassHierarchia() : array
		{
			return $this->class_hierarchia;
		}
		
		public function getClasses() : array
		{
			return $this->classes;
		}
		
		public function getClass(string $class_name) : PClass
		{
			return $this->classes[$class_name];
		}
		
		public function getFileNamesOfClasses() : array
		{
			return $this->file_names_of_classes;
		}
		
		public function addClasses(array $classes)
		{
			foreach($classes as $class)
			{
					if ($class instanceof PClass) {
						$this->classes[$class->getClassName()] = $class;
						$this->file_names_of_classes[$class->getClassName()] = strtolower($class->getClassName().".class.php");
					}
					else return false;
			}
			
			$this->generateHierarchia();
		}
		
		public function export()
		{
			if (!is_dir("images")) mkdir("images");
			
			$folder = "images";
			return file_put_contents($folder."/".$this->name.".pcm", serialize($this));           
		}
		
		public static function import(string $file_name)
		{
			if (!is_dir("images")) return false;
			else {
				$path = "images/".$file_name.".pcm";
				
				if (file_exists($path)) return unserialize(file_get_contents($path));
				else return false;
			}
		}
		
		public function generate()
		{
			$path = $this->name;
			if (!is_dir($path)) mkdir($path);
			
			foreach ($this->classes as $class) {
				$class_path = $path.DIRECTORY_SEPARATOR.$this->file_names_of_classes[$class->getClassName()];
				
				
				$code .= "<?php\n\n";
				$lines = explode("\n", (string)$class);
				foreach($lines as $line)
				{                    
						$code .= "\t".$line."\n";
				}
				$code .= "\n";
				$code .= "?>\n";
				
				file_put_contents($class_path, $code);
				
				$code = "";
				$lines = array();
			}
		}
		
		public function __toString()
		{
			$code .= "<?php\n\n";
			
			foreach($this->classes as $class)
			{
					$lines = explode("\n", (string)$class);
					foreach($lines as $line)
					{                    
							$code .= "\t".$line."\n";
					}
					$code .= "\n";
			}
			
			$code .= "?>\n";
			
			return $code;
		}
			
	}
    
?>
