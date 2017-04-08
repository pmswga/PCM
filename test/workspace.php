<?php
	require_once "../src/pcm/structures/pclass.class.php";

	use PCM\Structures\PClass;
	use PCM\Structures\PMethod;
	
	class Workspace
	{
		
		public static function setClass($class)
		{
			eval($class);
		}
		
		public static function run($code)
		{
			eval($code);
		}
		
	}
	
	$class = new PClass(_NATIVE_, "My");
	$method = new PMethod(_PUBLIC_, "first", ["data"]);
	$method->setSrc('
		echo $data;
	');
	
	$class->addMethods([$method]);
	
	if (!empty($_POST['evaluateItButton'])) {
		
		
		file_put_contents("testings.test", $_POST['code']."\n", FILE_APPEND);
		
		echo "<hr>";
		
		Workspace::setClass($class);
		Workspace::run($_POST['code']);
		
		echo "<hr>";
	}
	

?>
<form name="workspace" method="POST">
	<textarea name="code" rows="15" cols="60"></textarea>
	<br>
	<br>
	<input type="submit" name="evaluateItButton" value="Выполнить">
</form>