<?php
	declare(strict_types = 1);
	namespace PCM\Classes;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/src/pcm/structures/pclass.class.php";
	
	use PCM\Structures\PClass;
	
	class PImage
	{
		private $name;
		private $classes;
		private $file_names_of_classes;
		
		public function __construct(string $name)
		{
			$this->name = str_replace(" ", "_", $name);
			$this->classes = array();
			$this->file_names_of_classes = array();
		}
		
		public function getImageName() : string
		{
				return $this->name;
		}
		
		public function getClasses() : array
		{
			$sinker = function (&$array) use (&$sinker) {
				static $classes = array();
				foreach ($array as $value) {
					if (is_array($value)) {
						$sinker($value);
						
						if (!empty($value['class'])) {
							$classes[$value['class']->getClassName()] = $value['class'];
						}
					}
				}
				return $classes;
			};
			$classes = $sinker($this->classes);
			
			return $classes;
		}
		
		public function getClass(string $class_name) : PClass
		{
			$find = function($array, $class_name) use (&$find) {
				if(isset($array[$class_name])) return $array[$class_name];
				
				foreach ($array as $value){
					if (isset($value['childs'])) {
						$result = $find($value['childs'], $class_name);
						if ($result) return $result;
					}
				}
				
				return false;
			};
			$c =  $find($this->classes, $class_name);
			
			return $c['class'];
		}
		
		public function getFileNamesOfClasses() : array
		{
			return $this->file_names_of_classes;
		}
		
		public function createFileNamesList()
		{
			$sinker = function (&$array) use (&$sinker) {
				static $filenames = array();
				foreach ($array as $value) {
					if (is_array($value)) {
						$sinker($value);
						
						if (!empty($value['class'])) {
							$filenames[$value['class']->getClassName()] = strtolower($value['class']->getClassName()).".class.php";
						}
					}
				}
				return $filenames;
			};
			$this->file_names_of_classes = $sinker($this->classes);
		}
		
		public function addClasses(array $classes)
		{
			foreach($classes as $class)
			{
				if ($class instanceof PClass) {
					$this->addToHierarchia($class);
				}
				else return false;
			}
			$this->createFileNamesList();
		}
		
		public function removeClass(string $class_name)
		{
			$this->removeFromHierarchia($this->findClass($this->classes, $class_name)['class']);
			$this->createFileNamesList();
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
		
		public function &findClass(&$array, $class_name)
		{
			if(isset($array[$class_name])) return $array[$class_name];
			
			foreach ($array as &$value){
				if (isset($value['childs'])) {
					$result = &$this->findClass($value['childs'], $class_name);
					if ($result) return $result;
				}
			}
			
			return false;
		}
		
		public function addToHierarchia($class)
		{
			if (empty($class->getSuperClassName())) {
				$this->classes[$class->getClassName()]['class'] = $class;
				$this->classes[$class->getClassName()]['childs'] = array();
			} else {
				$find_obj = &$this->findClass($this->classes, $class->getSuperClassName());
				$find_obj['childs'][$class->getClassName()]['class'] = $class;
				$find_obj['childs'][$class->getClassName()]['childs'] = array();
			}
		}
		
		public function removeFromHierarchia($class)
		{
			if (empty($class->getSuperClassName())) {
				unset($this->classes[$class->getClassName()]);
			} else {
				$find_obj = &$this->findClass($this->classes, $class->getSuperClassName());
				unset($find_obj['childs']);
				$find_obj['childs'] = array();
			}
		}
		
		public function getClassHierarchia() : array
		{
			return $this->classes;
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
