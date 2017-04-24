<?php
	
	require_once "../start.php";
	
	if (!empty($_POST['className'])) {
		$class = $_SESSION['tmp']->getClass($_POST['className'])['supclass'];
		
		$methods = $class->getMethods();
		
		foreach ($methods as $method) {
			
			echo "<tr>";
			echo '<td><input type="checkbox" name="selectedMethod[]" value="'.$method->getMethodName().'" class="form-control"></td>';
			echo '<td><a href="'.$method->getMethodName().'">'.$method->getMethodName().'</a></td>';
			echo '<td>';
			
			$args = $method->getArgs();
			foreach ($args as $arg) {
				echo $arg;
				if (next($args)) echo ", ";
			}
			
			echo '</td>';
			
			echo '<td>';
			
			switch ($method->getMethodType())
			{
				case NATIVE_METHOD: echo "Обычный"; break;
				case STATIC_METHOD: echo "Статический"; break;
				case ABSTRACT_METHOD: echo "Абстрактный"; break;
			}
			
			echo '</td>';
			
			echo "</tr>";
			
		}
		
	}
	
?>