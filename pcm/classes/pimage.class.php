<?php
    declare(strict_types = 1);
    namespace PCM\Classes;
    
    require_once $_SERVER['DOCUMENT_ROOT']."/pcm/structures/pclass.class.php";
    
    use PCM\Structures\PClass;
    
    class PImage
    {
        private $name;
        private $classes;
        
        public function __construct(string $name, array $classes = array())
        {
            $this->name = str_replace(" ", "_", $name);
            $this->classes = $classes;
        }
        
        public function getName() : string
        {
            return $this->name;
        }
        
        public function getClasses() : array
        {
            return $this->classes;
        }
        
        public function addClasses(array $classes)
        {
            foreach($classes as $class)
            {
                if ($class instanceof PClass) {
                    $this->classes[$class->getClassName()] = $class;
                }
            }
        }
        
        public function save()
        {
            return file_put_contents($this->name.".pcm", serialize($this));
        }
        
        public function load($image)
        {
            
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
            
            
            $code .= "\n?>\n";
            
            return $code;
        }
        
    }
    
?>
