<?php
	declare(strict_types = 1);
	namespace PCM\Classes;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	
	use PCM\Structures\PClass;
	
	class PImage
	{
		private $image_name;
		private $classes;
		private $file_names_of_classes;
		
		public function __construct(string $image_name)
		{
			$this->image_name = str_replace(" ", "_", $image_name);
			$this->file_names_of_classes = array();
		}
		
		public function getImageName() : string
		{
			return $this->image_name;
		}
		
		public function getFilesList() : array
		{
			return $this->file_names_of_classes;
		}
		
		public function setImageName(string $image_name)
		{
			$this->image_name = $image_name;
		}
		
		public function findClass(string $class_name)
		{
			$find = function () use (&$find) {
				
			}
		}
		
		public function addClass(PClass $class)
		{
			if (!empty($class->getSuperClassName())) {
				
				$find_node = function(&$h, $search_class) use (&$find_node) {
					
					foreach ($h as $class_name => &$node) {
						
						if ($class_name == $search_class->getSuperClassName()) {
							
							$new_node = array(
								"supclass" => $search_class,
								"subclass" => array()
							);
							
							$node['subclass'][$search_class->getClassName()] = $new_node;
							
						} else {		
							if (!empty($node['subclass'])) {
								$find_node($node['subclass'], $search_class);
							}
						}
					}
					
				};
				
				
					$find_node($this->classes, $class);
				
			} else {
				
				$new_node = array(
					"supclass" => $class,
					"subclass" => array()
				);
				
				$this->classes[$class->getClassName()] = $new_node;
				
			}
		}
		
		public function removeClass($class_name)
		{
			$remove_class = function(&$h, $search_class) use (&$remove_class) {
				
				if (array_key_exists($search_class, $h)) {
					unset($h[$search_class]);
				} else {
					
					foreach ($h as $class_name => &$node) {
						
						if (array_key_exists($search_class, $node['subclass'])) {
							unset($node['subclass'][$search_class]);
						}
						
						if (!empty($node['subclass'])) {
							$remove_class($node['subclass'], $search_class);
						}
						
					}
					
				}
				
			};
			
			$remove_class($this->classes, $class_name);
			
		}
		
		public function getClassHierarchia() : array
		{
			return $this->classes;
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
			$classes = $this->getClasses();
			
			$code .= "<?php\n\n";
			
			foreach($classes as $class)
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
