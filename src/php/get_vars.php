<?php
	
	require_once "../start.php";
	
	if (!empty($_POST['className'])) {
		$class = $_SESSION['tmp']->getClass($_POST['className'])['supclass'];
		
		$vars = $class->getVars();
		
		foreach ($vars as $var) {
			
			echo "<tr>";
			echo '<td><input type="checkbox" name="selectedVar[]" value="'.$var->getVarName().'" class="form-control"></td>';
			echo '<td>'.$var->getVarName().'</td>';
			
			echo '<td>';
			switch ($var->getAccessType())
			{
				case PUBLIC_ACCESS: echo "PUBLIC"; break;
				case PRIVATE_ACCESS: echo "PRIVATE"; break;
				case PROTECTED_ACCESS: echo "PROTECTED"; break;
			}
			echo '</td>';
			
			echo '<td>';
			switch ($var->getVarType())
			{
				case NATIVE_VAR: echo "Обычное"; break;
				case STATIC_VAR: echo "Статическое"; break;
			}
			echo '</td>';
			
			echo "</tr>";
			
		}
		
	}
	
	// <tr>
		// <td><input type="checkbox" name="selectedVar[]" value="" class="form-control"></td>
		// <td>PUBLIC</td>
		// <td><a href="#edit">a</a></td>
		// <td>Переменная</td>
	// </tr>

?>