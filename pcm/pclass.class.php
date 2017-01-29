<?php
    declare(strict_types=1);
    namespace PCM\Structures;
    
    require_once "consts/ptypeclass.consts.php";
    
    class PClass
    {
        private $name;
        private $vars;
        private $consts;
        private $methods;
        private $class_type;
        
        function __construct(int $class_type, string $name)
        {
            $this->name = $name;
            $this->vars = array();
            $this->consts = array();
            $this->methods = array();
            
            switch($class_type)
            {
                case _ABSTRACT_:
                {
                    $this->class_type = $class_type;
                } break;
                case _NATIVE_:
                {
                    $this->class_type = $class_type;
                } break;
                default: $this->class_type = 1; break;
            }
        }
        
        public function getName() : string
        {
            return $this->name;
        }
        
        public function getVars() : array
        {
            return $this->vars;
        }
        
        public function getVar(string $var_name) : PVar
        {
            return $this->vars[$var_name];
        }
        
        public function getConsts() : array
        {
            return $this->consts;
        }
        
        public function getMethods() : array
        {
            return $this->methods;
        }
        
        public function getClassType() : int
        {
            return $this->class_type;
        }
        
        public function setName(string $class_name)
        {
            $this->name = $class_name;
        }
        
        public function setClassType(int $class_type)
        {
            switch($class_type)
            {
                case _ABSTRACT_:
                {
                    $this->class_type = $class_type;
                } break;
                case _NATIVE_:
                {
                    $this->class_type = $class_type;
                } break;
                default: $this->class_type = 1; break;
            }
        }
        
        public function addVars(PVar ...$vars)
        {
            foreach($vars as $var)
            {
                $this->vars[$var->getName()] = $var;
            }
        }
        
        
        
    }
    
?>
