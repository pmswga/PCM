<!DOCTYPE html>
<html>
	<head>
		<title>Class Browser</title>
		<style>
			
			ul{
				list-style-type: none;
				margin: 0px;
				padding-left: 15px;
			}
			
			ul li {
				padding: 5px;
			}
			
		</style>
	</head>
	<body>
		<?php
			
			$image = simplexml_load_file("../img.xml");
			
			$classes = array();
			for($i = 0; $i < count($image->class); $i++)
				$classes[] = $image->class[$i];
			
			function getSubClasses($class)
			{
				if(!empty($class->subclass))
				{
					for($i = 0; $i < count($class->subclass); $i++)
					{
						echo "<ul>";
						echo "<li>".$class->subclass[$i]['name']."</li>";
						getSubClasses($class->subclass[$i]);
						echo "</ul>";
					}
				}
			}
			
			foreach($classes as $class)
			{
				echo "<ul>";
				echo "<li>";
					
					echo "Class name: <b><a href='".$class['file']."'>".$class['name']."</a></b><br>";
				
				echo "</li>";
				getSubClasses($class);
				echo "</ul>";
			}
		?>
	</body>
</html>
