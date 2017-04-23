<?php
	
	private function &findClass(&$array, $class_name)
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
		
		private function addToHierarchia($class)
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
		
		private function removeFromHierarchia(PClass $class)
		{
			if (empty($class->getSuperClassName())) {
				unset($this->classes[$class->getClassName()]);
			} else {
				$find_obj = &$this->findClass($this->classes, $class->getSuperClassName());
				unset($find_obj['childs']);
				$find_obj['childs'] = array();
			}
		}
		
		private function addToFileNamesList(PClass $class)
		{
			$this->file_names_of_classes[] = strtolower($class->getClassName()).".class.php";
		}
		
		private function removeFromFileNamesList(PClass $class)
		{
			unset($this->file_names_of_classes[$class->getClassName()]);
		}
		
		
		
		
		public function getClassHierarchia() : array
		{
			return $this->classes;
		}
	
?>