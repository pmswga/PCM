<?php
	
	require_once "../start.php";
	
	if (!empty($_POST['className'])) {
		$class = $_SESSION['tmp']->getClass($_POST['className'])['supclass'];
		
		$methods = $class->getMethods();
		
		foreach ($methods as $method) {
			
			echo "<tr>";
			echo '<td><input type="checkbox" name="selectedMethod[]" value="'.$method->getMethodName().'" class="form-control"></td>';
			echo '<td><a href="'.$method->getMethodName().'">'.$method->getMethodName().'</a></td>';
			echo '<td></td>';
			echo '<td></td>';
			echo "</tr>";
			
			
			/*
				<tr>
					<td><input type="checkbox" name="selectedMethod[]" value="" class="form-control"></td>
					<td><a href="#edit">hw</a></td>
					<td>a, b, c</td>
					<td>Обычный</td>
				</tr>
				
			*/
			
		}
		
		
	}
	
?>