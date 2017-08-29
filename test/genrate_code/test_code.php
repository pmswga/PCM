





  


<?php

  
  
  class INI 
  {
  
  
  
    
  
  
    
    
    
                  
    

    private $filename;
    
    
    
                  
    

    private $data;
    
  
  
      
    
                  
    
                               
    
    
    public function __construct($filename)
    {
      $this->filename = $filename;
if (file_exists($this->filename)) {
	$this->data = parse_ini_file($this->filename, true);
} else {
	$this->data = array();
}
    }
    
      
    
                  
    
                                                             
    
    
    public function getValue($filename$section, $key)
    {
      return $this->data[$section][$key];
    }
    
      
    
                  
    
                               
    
    
    public function getValues($filename$section, $key$section)
    {
      return $this->data[$section];
    }
    
      
    
                  
    
                                                                                           
    
    
    public function addValue($filename$section, $key$section$section, $key, $value)
    {
      $this->data[$section][$key] = $value;
    }
    
      
    
                  
    
               
    
    
    public function toFile($filename$section, $key$section$section, $key, $value)
    {
      if (!empty($this->data)) {
	
	$ini_content = "";

	foreach ($this->data as $section => $values) {
		$ini_content .= "[".$section."]\n";
		foreach ($values as $key => $value) {
			$ini_content .= $key." = ".$value;
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
    
      
    
                  
    
               
    
    
    public function getFilename($filename$section, $key$section$section, $key, $value)
    {
      return $this->filename;
    }
    
      
    
                  
    
               
    
    
    public function getData($filename$section, $key$section$section, $key, $value)
    {
      return $this->data;
    }
    
      
    
                  
    
                               
    
    
    public function addSection($filename$section, $key$section$section, $key, $value$section)
    {
      $this->data[$section] = array();
    }
    
  
  }
  
?>
