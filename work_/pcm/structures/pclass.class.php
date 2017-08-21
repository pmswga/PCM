<?php
	declare(strict_types = 1);
	namespace PCM\Structures;
	
	require_once $_SERVER['DOCUMENT_ROOT']."/work_/pcm/consts/ptypeclass.consts.php";
	
	require_once "pvar.class.php";
	require_once "pconst.class.php";
	require_once "pmethod.class.php";
	
	use PCM\Structures\PVar;
	use PCM\Structures\PConst;
	use PCM\Structures\PMethod;
	
  /*!
    
    \file pclass.class.php
    
    \class PClass
    \brief Класс описывает сущность "Класс"
    \author pmswga
    \version 1.0
    
    Данный класс описывает сущность "Класс". В последствии созданный объект может быть форматирован в виде исходного кода класса, который описывает
        
  */
  
	class PClass
	{
		private $class_type;      ///< Тип класса
		private $class_name;      ///< Имя класса
		private $superclass_name; ///< Имя родительского класса
		
		private $vars;            ///< Свойства
		private $consts;          ///< Константы
		private $methods;         ///< Методы
		
    /*!
      \param[in] $class_name      - Имя класса
      \param[in] $superclass_name - Имя родительского класса
      \param[in] $class_type      - Тип класса
    */
    
		function __construct(string $class_name, string $superclass_name = "", int $class_type = NATIVE_CLASS)
		{
			$this->class_name = str_replace(" ", "_", $class_name);
			$this->superclass_name = str_replace(" ", "_", $superclass_name);
			$this->vars = array();
			$this->consts = array();
			$this->methods = array();
			
			switch($class_type)
			{
				case ABSTRACT_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				case NATIVE_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = NATIVE_CLASS; break;
			}
		}
    
    /*!
      \return Имя класса
    */
		
		public function getClassName() : string
		{
			return $this->class_name;
		}
		
    /*!
      \return Имя родительского класса
    */
    
		public function getSuperClassName() : string
		{
			return $this->superclass_name;
		}
    
    /*!
      \return Тип класса
      \note См. описание констант в ptypeclass.consts.php
    */
		
		public function getClassType() : int
		{
			return $this->class_type;
		}
    
    /*!
      \return Все свойства класса
      \note Массив с объектами класса PVar
    */
		
		public function getVars() : array
		{
			return $this->vars;
		}
		
    /*!
      \return Существующее свойство класса
      \note Объект класса PVar
    */
    
		public function getVar(string $var_name) : PVar
		{
			return $this->vars[$var_name];
		}
    
    /*!
      \return Все константы класса
      \note Массив с объектами класса PConst
    */
		
		public function getConsts() : array
		{
			return $this->consts;
		}
    
    /*!
      \return Существующую константу класса
      \note Объект класса PConst
    */
		
		public function getConst(string $const_name) : PConst
		{
			return $this->consts[$const_name];
		}
    
    /*!
      \return Все методы класса
      \note Массив с объектами класса PMethod
    */
		
		public function getMethods() : array
		{
			return $this->methods;
		}
		
    /*!
      \return Существующий метод класса
      \note Объект класса PMethod
    */
    
		public function getMethod(string $method_name) : PMethod
		{
			return $this->methods[$method_name];
		}
		
    /*!
      \param[in] $class_name - имя класса
    */
    
		public function setClassName(string $class_name)
		{
			$this->class_name = str_replace(" ", "_", $class_name);
		}
    
    /*!
      \param[in] $supclass - имя суперкласса
      \warning Возможно, метод будет убран, чтобы запретить возможность произвольно изменять суперкласс
    */
		
		public function setSuperClassName(string $supclass)
		{
			$this->superclass_name = str_replace(" ", "_", $supclass);
		}
    
    /*!
      \param[in] $class_type - Тип класса
      \note См. описание констант в ptypeclass.consts.php
    */
		
		public function setClassType(int $class_type)
		{
			switch($class_type)
			{
				case ABSTRACT_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				case NATIVE_CLASS:
				{
						$this->class_type = $class_type;
				} break;
				default: $this->class_type = NATIVE_CLASS; break;
			}
		}
		
    /*!
      \param $vars - Свойства
      \note Массив с объектами класса PVar
    */
    
		public function addVars(array $vars)
		{
			foreach($vars as $var)
			{
				if ($var instanceof PVar) {
					$this->vars[$var->getVarName()] = $var;
					return true;
				}
				else return false;
			}
		}
		
    /*!
      \param $var - Свойство
      \note Объект класса PVar
    */
    
		public function addVar(PVar $var)
		{
			$this->vars[$var->getVarName()] = $var;
		}
		
    /*!
      \param[in] $consts - Константы
      \note Массив с объектами класса PConst
    */
    
		public function addConsts(array $consts)
		{
			foreach($consts as $const)
			{
				if ($const instanceof PConst) {
					$this->consts[$const->getConstName()] = $const;
					return true;
				}
				else return false;
			}
		}
    
    /*!
      \param[in] $const - Константа
      \note Объект класса PConst
    */
		
		public function addConst(PConst $const)
		{
			$this->consts[$const->getConstName()] = $const;
		}
		
    /*!
      \param[in] $methods - Методы
      \note Массив с объектами класса PMethod
    */
    
		public function addMethods(array $methods)
		{
			foreach($methods as $method)
			{
				if ($method instanceof PMethod) {
					$this->methods[$method->getMethodName()] = $method;
					return true;
				}
				else return false;
			}
		}
		
    /*!
      \param[in] $method - Метод
      \note Объект класса PMethod
    */
    
		public function addMethod(PMethod $method)
		{
			$this->methods[$method->getMethodName()] = $method;
		}
		
    /*!
      \warning Тестовый метод для предосмотра кода
    */
    
		public function preview() : string
		{
			$type = "";
			switch($this->class_type)
			{
				case ABSTRACT_CLASS:
				{
					$type = "abstract ";
				} break;
			}
			
			if (!empty($this->superclass_name)) {
				$code .= $type."class ".$this->class_name." extends ".$this->superclass_name."\n";
			} else {              
				$code .= $type."class ".$this->class_name."\n";
			}
			
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
    
    /*!
      \return Исходный код класса
      \note Код генерируется в соответствии с указанными опциями
      
      \par
        Ниже приведён сгенерированного класса
      
      \code
      
      class PDictionary
      {
        private $name;
        private $data;
        
        public function construct($name)
        {
          $this->name = $name;
        }
        
        public function addEntry($key, $value)
        {
          $this->data[$key] = $value;
        }
        
        public function removeEntry($key)
        {
          unset($this->data[$key]);
        }
        
        public function getData()
        {
          return $this->data;
        }
        
        public function getName()
        {
          return $this->name;
        }
        
        public function sort()
        {
          return ksort($this->data);
        }
      
      }
        
      \endcode
    */
		
		public function __toString()
		{
			$type = "";
			switch($this->class_type)
			{
				case ABSTRACT_CLASS:
				{
					$type = "abstract ";
				} break;
			}
      
			if (!empty($this->superclass_name)) {
				$code .= $type."class ".$this->class_name." extends ".$this->superclass_name."\n";
			} else {              
				$code .= $type."class ".$this->class_name."\n";
			}
      
			foreach($this->consts as $const)
			{
				$code .= "\t".$const;
			}
			
			$code .= "{\n";
			
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
  
  /*!
    
    \example pclass_example.php
    
  */
    
?>
