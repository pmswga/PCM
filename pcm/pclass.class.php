<?php
    declare(strict_types=1);
    namespace PCM\Structures;
    
    require_once "consts/ptypeclass.consts.php";
    require_once "pvar.class.php";
    require_once "pconst.class.php";
    require_once "pmethod.class.php";
    
    class PClass
    {
        private $name;
        private $vars;
        private $consts;
        private $methods;
        private $class_type;
        
        function __construct(int $class_type, string $name)
        {
            $this->name = str_replace(" ", "_", $name);
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
            $this->name = str_replace(" ", "_", $class_name);
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
        
        public function addVars(array $vars)
        {
            foreach($vars as $var)
            {
                if ($var instanceof PVar)
                    $this->vars[$var->getName()] = $var;
            }
        }
        
        public function addConsts(array $consts)
        {
            foreach($consts as $const)
            {
                if ($const instanceof PConst)
                    $this->consts[$const->getName()] = $const;
            }
        }
        
        public function addMethods(array $methods)
        {
            foreach($methods as $method)
            {
                if ($method instanceof PMethod)
                    $this->methods[$method->getName()] = $method;
            }
        }
        
        public function __toString()
        {
            $type = "";
            switch($this->class_type)
            {
                case _ABSTRACT_:
                {
                    $type = "abstract";
                } break;
            }
            
            $code = $type." class ".$this->name."\n";
            $code .= "{\n";
            
            foreach($this->consts as $const)
            {
                $code .= "\t".$const;
            }
            
            $code .= "\n";
            
            foreach($this->vars as $var)
            {
                $code .= "\t".$var;
            }
            
            foreach($this->methods as $method)
            {
                $lines = explode("\n", (string)$method);
                
                foreach($lines as $line)
                {
                    $code .= "\t".$line."\n";
                }
            }
            
            $code .= "\n}";
            
            
            return $code;
        }
        
    }
    
?>
