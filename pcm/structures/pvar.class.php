<?php
    declare(strict_types = 1);
    namespace PCM\Structures;
    
    require_once $_SERVER['DOCUMENT_ROOT']."/pcm/consts/ptypeaccessright.consts.php";
    
    class PVar
    {
        private $name;
        private $access_type;
        
        function __construct(int $access_type = _PRIVATE_, string $var_name)
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
            
            $this->name = $var_name;
        }
        
        public function getName() : string
        {
            return $this->name;
        }
        
        public function getAccessType() : int
        {
            return $this->type;
        }
        
        public function setName(string $var_name)
        {
            $this->name = $var_name;
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
                default: $this->access_type = _PRIVATE_;
            }
            
            return $type." $".trim($this->name).";\n";
        }
        
    }
    
?>
