<?php
	require_once "start.php";
	
	const THIS = "index.php";
	
	if(!empty($_POST['create']))
	{
		$props = $_POST['classProperties'];
		
		$className = htmlspecialchars($_POST['className']);
		$superClass = htmlspecialchars($_POST['superClass']);
		$typeClass = $_POST['typeClassText'];
		
		$newClass = new _Class($className, $typeClass, $superClass);
		$newClass->setArrayVariables($props);
		
		$_SESSION['classes'][$newClass->getClassName()] = $newClass;
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['createMethodButton']))
	{
		$class = $_POST['method_class'];
		$type = $_POST['method_type'];
		$name = $_POST['method_name'];
		$args = $_POST['method_args'];
		
		$method = new _Method($name, $type);
		$method->setArgs(explode(",", $args));
		
		$_SESSION['classes'][$class]->setMethods($type, $method);
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['generateClass']))
	{
		$path = $_POST['path'];
		
		$filename = $path."/".str_replace("#", "", $_POST['class_name']).".class.php";
		$src = $_POST['code'];
		
		file_put_contents($filename, "<?php\n\n");
		file_put_contents($filename, $src, FILE_APPEND);
		file_put_contents($filename, "\n\n?>", FILE_APPEND);
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['generateImage']))
	{
		$Image = $_SESSION['image'];
		$path = $_POST['path'];
		
		foreach($Image->getClasses() as $class)
		{
			$filename = $path."/".$class->getClassName().".class.php";
			$src = (string)$class;
			
			file_put_contents($filename, "<?php\n\n");
			file_put_contents($filename, $src, FILE_APPEND);
			file_put_contents($filename, "\n\n?>", FILE_APPEND);
		}
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['buildImageButton']))
	{
		$Image = new Image("img");
		
		foreach($_SESSION['classes'] as $class)
		{
			$Image->addClass($class);
		}
		
		$_SESSION['image'] = $Image;
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['exportImageButton']))
	{
		$_SESSION['image']->export();
		$obj = serialize($_SESSION['image']);
		file_put_contents($_SESSION['image']->getName().".pimg", $obj);
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['importImageButton']))
	{
		unset($_SESSION['image']);
		unset($_SESSION['classes']);
		$img = file_get_contents("img.pimg");
		$img = unserialize($img);
		$_SESSION['image'] = $img;
		
		foreach($img->getClasses() as $class)
		{
			$_SESSION['classes'][$class->getClassName()] = $class;
		}
		
		CTools::Redirect(THIS);
	}
	
	if(!empty($_POST['removeImageButton']))
	{
		unset($_SESSION['image']);
		unset($_SESSION['classes']);
		
		CTools::Redirect(THIS);
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<fieldset>
						<legend>Иерархия классов</legend>
						<?php
							
							if(!empty($_SESSION['classes']))
							{
								foreach($_SESSION['classes'] as $class)
								{
									echo "<h3><a href='#".$class->getClassName()."'>".$class->getClassName()."</a></h3>";
								}
							}
							
						?>	
					</fieldset>
				</div>
				<div class="col-md-4">
					<fieldset>
						<legend>Методы</legend>
					</fieldset>
				</div>
				<div class="col-md-4">
					<fieldset>
						<legend>Генератор</legend>
						<div class="panel-group" id="generator">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#generator" href="#create_class">Создать класс</a></h4>
								</div>
								<div id="create_class" class="panel-collapse collapse">
									<div class="panel-body">
										<form name="createClass" method="POST">
											<div class="form-group">
												<label>Имя класса</label>
												<input name="className" type="text" class="form-control" required>
											</div><!--
											<div class="form-group">
												<label>Унаследован от:</label>
													<input name="superClass" class="form-control" type="text">
											</div>
											<div class="form-group">
												<p>Тип</p>
												<div class="form_row">
													<select id="typeClass" onChange="selectTypeClass(this)" class="form-control">
														<option>Обычный</option>
														<option>Абстрактный</option>
													</select>
													<input name="typeClassText" class="form-control" type="hidden" value="">
												</div>
											</div>-->
											<div class="form-group">
												<label>Свойства</label>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-4">
																<select id="typeProperty" class="form-control">
																	<option>public</option>
																	<option>private</option>
																	<option>protected</option>
																</select>
															</div>
															<div class="col-md-8">
																<div class="row">
																	<div class="col-md-6">
																		<input name="propertyName" class="form-control" type="text">
																	</div>
																	<div class="col-md-6">
																		<button name="addProperty" onClick="addClassProperty()" type="button">+</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-12">
														<table id="tableProperties" class="table table-striped">
															<tr>
																<th>Доступ</th>
																<th>Имя свойства</th>
															</tr>
														</table>
													</div>
												</div>
											</div>
											<div class="form-group">
												<input name="create" type="submit" value="Создать класс">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-success">
								<div class="panel-heading">
									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#generator" href="#create_method">Создать метод</a></h4>
								</div>
								<div id="create_method" class="panel-collapse collapse">
									<div class="panel-body">
										<form name="createMethod" method="POST">
											<div class="form-group">
												<label>Класс</label>
												<select name="method_class" class="form-control">
													<?php 
														
														if(!empty($_SESSION['classes']))
														{
															foreach($_SESSION['classes'] as $class)
															{
																echo "<option>".$class->getClassName()."</option>";
															}
														}
														
													?>
												</select>
											</div>
											<div class="form-group">
												<label>Модификатор доступа</label>
												<select name="method_type" class="form-control">
													<option>public</option>
													<option>private</option>
													<option>protected</option>
												</select>
											</div>
											<div class="form-group">
												<label>Название метода:</label>
												<input name="method_name" type="text" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Аргументы (через , ):</label>
												<input name="method_args" type="text" class="form-control">
											</div>
											<div class="form-group">
												<input name="createMethodButton" type="submit" value="Создать метод">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Работа с образом</legend>
						<form name="buildImage" method="POST">
							<input name="buildImageButton" type="submit" class="btn btn-primary" value="Собрать">
							<input name="exportImageButton" type="submit" class="btn btn-primary" value="Экспортировать">
							<input name="importImageButton" type="submit" class="btn btn-primary" value="Импортировать">
							<input name="removeImageButton" type="submit" class="btn btn-danger" value="Удалить">
						</form>
					</fieldset>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<fieldset>
						<legend>Предосмотр кода</legend>
						<form name="save" method="POST">
							<div class="form-group">
								<textarea name="code" id="source" rows="16" class="form-control"></textarea>
								<input name="thatis" type="hidden" value="">
								<input name="class_name" type="hidden" value="">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="col-md-2">
												<label>Куда:</label> 
											</div>
											<div class="col-md-10">
												<input name="path" type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-8">
										<input name="generateClass" class="btn btn-success" type="submit" value="Сгенерировать">
										<input name="generateImage" class="btn btn-success" type="submit" value="Сгенерировать весь образ">
									</div>
								</div>
							</div>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
		<br>
	
		<script type="text/javascript">
			
			function selectTypeClass(element)
			{
				var index = element.options.selectedIndex;
				var currentOption = element.options[index].value;
				
				if(currentOption == "Абстрактный")
				{
					document.getElementsByName("typeClassText").item(0).setAttribute("value", "abstract");
				}
				else
				{
					document.getElementsByName("typeClassText").item(0).setAttribute("value", "standart");
				}
			}
			
			function addClassProperty()
			{
				if(document.getElementsByName("propertyName").item(0).value != "")
				{
					var index = document.getElementById("typeProperty").options.selectedIndex;
					var type = document.getElementById("typeProperty").options[index].value;
					var propertyName = document.getElementsByName("propertyName").item(0).value;
					
					var inputItem = document.createElement("input");
					
					inputItem.setAttribute("name", "classProperties[" + type + "][]");
					inputItem.setAttribute("type", "hidden");
					inputItem.value = "$" + propertyName;
					
					var trItem = document.createElement("tr");
					var tdTypeItem = document.createElement("td");
					var tdPropNameItem = document.createElement("td");
					
					if(type == "public") tdTypeItem.style.backgroundColor = "#32CD32";
					else if(type == "private") tdTypeItem.style.backgroundColor = "#B22222";
					else if(type == "protected") tdTypeItem.style.backgroundColor = "#FF8C00";
					
					tdTypeItem.innerHTML = "<p>" + type + "</p>";
					tdPropNameItem.innerHTML = "<p>$" + propertyName + "</p>";
					tdTypeItem.appendChild(inputItem);
					
					trItem.appendChild(tdTypeItem);
					trItem.appendChild(tdPropNameItem);
					document.getElementById("tableProperties").appendChild(trItem);
					
					document.getElementsByName("propertyName").item(0).value = "";
				} else alert("Свойство не может быть безымянным");
			}
			
			$(document).ready(function(){
				
				$("a[href^='#']").click(function()
				{
					var class_name = $(this).attr("href");
					
					$.ajax({
						url: "image.controller.php",
						type: "POST",
						data: "classname=" + class_name,
						success: function(replay){
							$("[name='class_name']").attr("value", class_name);
							$("#source").text(replay);
						}
					});
					
				});
				
			});
		
		</script>
	</body>
</html>