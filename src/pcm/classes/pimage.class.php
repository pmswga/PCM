<?php
	declare(strict_types = 1);
	namespace PCM\Classes;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	
	use PCM\Structures\PClass;
	
	class PImage
	{
		private $image_name;
		private $image_file;
		private $classes;
		private $classes_files;
		
		public function __construct(string $image_name)
		{
			$this->image_name = str_replace(" ", "_", $image_name);
			$this->image_file = strtolower($image_name).".pcm";
			$this->classes = array();
			$this->classes_files = array();
		}
		
		public function getImageName() : string
		{
			return $this->image_name;
		}
		
		public function getClassesFiles() : array
		{
			return $this->classes_files;
		}
		
		public function setImageName(string $image_name)
		{
			$this->image_name = $image_name;
		}
		
		private function isClassExists(string $class_name) : bool
		{
			$find = function ($h, $search_class) use (&$find) {
				
				if (!empty($h)) {
					
					if (array_key_exists($search_class, $h)) {
						return true;
					} else {
						
						foreach ($h as $class_name => &$node) {
							
							if (array_key_exists($search_class, $node['subclass'])) {
								return true;
							}
							
							if (!empty($node['subclass'])) {
								return $find($node['subclass'], $search_class);
							}
							
						}
					}
				} 
				
				return false;
			};
			
			return $find($this->classes, $class_name);
		}
		
		public function addClass(PClass $class) : bool
		{
			$class_file = strtolower($class->getClassName()).".class.php";
			
			if (!empty($class->getSuperClassName())) {
				
				$add_class = function(&$h, $search_class) use (&$add_class) {
					
					foreach ($h as $class_name => &$node) {
						
						if ($class_name == $search_class->getSuperClassName()) {
							
							$new_node = array(
								"supclass" => $search_class,
								"subclass" => array()
							);
							
							$node['subclass'][$search_class->getClassName()] = $new_node;
							
						} else {		
							if (!empty($node['subclass'])) {
								$add_class($node['subclass'], $search_class);
							}
						}
					}
					
				};
				
				if ($this->isClassExists($class->getSuperClassName())) {					
					$add_class($this->classes, $class);
					$this->classes_files[$class->getClassName()] = $class_file;
					
					return true;
				} else return false;
					
			} else {
				
				$new_node = array(
					"supclass" => $class,
					"subclass" => array()
				);
				
				$this->classes[$class->getClassName()] = $new_node;
				$this->classes_files[$class->getClassName()] = $class_file;
				
				return true;
			}
		}
		
		public function removeClass($class_name)
		{
			$remove_class = function(&$h, $search_class) use (&$remove_class) {
				
				if (array_key_exists($search_class, $h)) {
					unset($h[$search_class], $this->classes_files[$search_class]);
				} else {
					
					foreach ($h as $class_name => &$node) {
						
						if (array_key_exists($search_class, $node['subclass'])) {
							unset($node['subclass'][$search_class], $this->classes_files[$search_class]);
						}
						
						if (!empty($node['subclass'])) {
							$remove_class($node['subclass'], $search_class);
						}
						
					}
					
				}
				
			};
			
			$remove_class($this->classes, $class_name);
		}
		
		public function getClassHierarchia()
		{
			return $this->classes;
		}
		
		public function getClasses()
		{
			$get_classes = function ($h) use (&$get_classes) {
				static $classes;
				
				foreach ($h as $class_name => $node) {
					
					$classes[$class_name] = $node["supclass"];
					
					if (!empty($node['subclass'])) {
						$get_classes($node['subclass']);
					}
					
				}
				
				return $classes;
			};
			
			return $get_classes($this->classes);
		}
		
		public function getClass(string $class_name)
		{
			$get_class = function ($h, $search_class) use (&$get_class) {
				static $class;
				
				foreach ($h as $class_name => $node) {
					
					if ($class_name == $search_class) {
						$class = $node;
					}
					
					if (!empty($node['subclass'])) {
						$get_class($node['subclass'], $search_class);
					}
					
				}
				
				return $class;
			};
			
			if (!empty($this->classes)) {
				return $get_class($this->classes, $class_name);
			}
		}
		
		public function export()
		{
			if (!is_dir("images")) mkdir("images");
			
			$folder = "images";
			return file_put_contents($folder."/".$this->image_name.".pcm", serialize($this));           
		}
		
		public static function import(string $file_name)
		{
			if (!is_dir("images")) return false;
			else {
				$path = "images/".$file_name;
				
				if (file_exists($path)) return unserialize(file_get_contents($path));
				else return false;
			}
		}
		
		public function generate()
		{
			$path = $this->image_name;
			if (!is_dir($path)) mkdir($path);
			
			$classes = $this->getClasses();
			
			foreach ($classes as $class) {
				
				$class_path = $path.DIRECTORY_SEPARATOR.$this->classes_files[$class->getClassName()];
				
				$code .= "<?php\n\n";
				
				if (!empty($class->getSuperClassName())) {
					$code .= "\t";
					$code .= 'require_once "'.strtolower($class->getSuperClassName()).'.class.php";';
					$code .= "\n\n";
				}
				
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
			$classes = $this->getClasses();
			
			foreach($classes as $class)
			{
				$lines = explode("\n", (string)$class);
				
				foreach($lines as $line)
				{                    
					$code .= "\t".$line."\n";
				}
				$code .= "\n";
			}
			
			return $code;
		}
		
	}
	
?>
