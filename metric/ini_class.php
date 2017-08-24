<?php
  declare(strict_types = 1);
  namespace Test\Types;
  
  class INI
  {
    private $filename;
    private $data;
    
    function __construct(string $filename)
    {
      $this->filename = $filename;
      
      if (file_exists($filename)) {        
        $this->data = parse_ini_file($this->filename, true);
      } else {
        $this->data = array();
      }
      
    }
    
    public function getFilename() : string
    {
      return $this->filename;
    }
    
    public function getData() : array
    {
      return $this->data;
    }
    
    public function addValue(string $section, string $key, string $value)
    {
      $this->data[$section][$key] = $value;
    }
    
    public function addSection(string $section)
    {
      $this->data[$section] = array();
    }
    
    public function getValue(string $section, string $key)
    {
      return $this->data[$section][$key];
    }
    
    public function getValues(string $section) : array
    {
      return $this->data[$section];
    }
    
    public function toFile() : bool
    {
      if (!empty($this->data)) {
        
        $ini_content = "";
        
        foreach ($this->data as $section => $values) {
          
          $ini_content .= "[".$section."]\n";
          
          foreach ($values as $key => $value) {
            $ini_content .= $key." = ".$value."\n";
          }
          
          $ini_content .= "\n";
          
        }
        
        $result = file_put_contents($this->filename, $ini_content);
        
        if ($result !== false) {
          return true;
        } else {
          return false;
        }
      }
    }
    
  }
  
?>
