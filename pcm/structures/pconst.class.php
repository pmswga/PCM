<?php
    declare(strict_types=1);
    namespace PCM\Structures;
    
    class PConst
    {
        private $name;
        private $value;
        
        function __construct(string $const_name, string $value)
        {
            $this->name = $const_name;
            $this->value = $value;
        }
        
        public function getName() : string
        {
            return $this->name;
        }
        
        public function getValue() : string
        {
            return $this->value;
        }
        
        public function setName(string $const_name)
        {
            $this->name = $const_name;
        }
        
        public function __toString()
        {
            return "const ".$this->name." = ".$this->value.";\n";
        }
        
    }
    
?>
