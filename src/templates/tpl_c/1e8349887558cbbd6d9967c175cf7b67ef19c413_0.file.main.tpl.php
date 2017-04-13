<?php
/* Smarty version 3.1.29, created on 2017-04-13 22:38:24
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58efd3b0ed7025_40649231',
  'file_dependency' => 
  array (
    '1e8349887558cbbd6d9967c175cf7b67ef19c413' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\main.tpl',
      1 => 1492112304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58efd3b0ed7025_40649231 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/vt.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" type="text/css" href="css/semantic/dist/semantic.min.css">
		<?php echo '<script'; ?>
 src="css/semantic/dist/semantic.min.js"><?php echo '</script'; ?>
>
		<style>
			
			table tr th {
				text-align: center;
			}
			
			[name='createClassForm'] .field:last-child, 
			[name='editMethodForm'] .field:last-child,
			[name='createMethodForm']	.field:last-child
			{
				display: flex;
				justify-content: flex-end;
			}
			
			[type='checkbox'] {
				outline: none;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
      <div class="row">
				<div class="col-md-12">
					<div id="main_menu" class="ui small top menu">
						<div class="item">
							<div class="ui mini statistics">
								<div class="statistic">
									<div class="label">
										Образов
									</div>
									<div class="value">
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countImages']->value)===null||$tmp==='' ? 0 : $tmp);?>

									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Классов
									</div>
									<div class="value">
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countClasses']->value)===null||$tmp==='' ? 0 : $tmp);?>

									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Свойств
									</div>
									<div class="value">
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countVars']->value)===null||$tmp==='' ? 0 : $tmp);?>

									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Методов
									</div>
									<div class="value">
										<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countMethods']->value)===null||$tmp==='' ? 0 : $tmp);?>

									</div>
								</div>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['messageStatus']->value != NULL) {?>
							<div class="item">
								<div class="ui <?php echo $_smarty_tpl->tpl_vars['messageStatus']->value;?>
 message">
									<i class="close icon"></i>
									<div class="header"><?php echo $_smarty_tpl->tpl_vars['messageHeader']->value;?>
</div>
									<p><?php echo $_smarty_tpl->tpl_vars['messageContent']->value;?>
</p>
								</div>
							</div>
						<?php }?>
						<div class="right menu">
							<a class="item">
								<i class="signal big icon" title="Метрики кода"></i>
							</a>
							<a class="item">
								<i class="idea big icon" title="Место для идей"></i>
							</a>
							<a id="settingsLink" class="item">
								<i class="settings big icon" title="Настройки"></i>
							</a>
							<a class="item">
								<i class="help circle outline big icon" title="Справка"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 15px;">
				<div class="col-md-3">
					<div class="ui styled accordion">
						<div class="active title">
							<i class="dropdown icon"></i>
							Классы
						</div>
						<div class="active content">
							<div class="accordion">
								<div class="active title">
										<i class="dropdown icon"></i>
										Иерархия
								</div>
								<div class="active content">
									<?php if ($_smarty_tpl->tpl_vars['classHierarchia']->value != NULL) {?>
										<div class="ui bulleted list">
											<?php echo $_smarty_tpl->tpl_vars['classHierarchia']->value;?>

										</div>
									<?php } else { ?>
										<h2 align="center">Классы не объявлены</h2>
									<?php }?>
										<!-- <div class="item"> -->
											<!-- <div>Object</div> -->
											<!-- <div class="list"> -->
												<!-- <div class="item"> -->
													<!-- <div>GraphicsTools</div> -->
													<!-- <div class="list"> -->
														<!-- <div class="item">AcceleratorTable</div> -->
														<!-- <div class="item"> -->
															<!-- <div>Brush</div> -->
															<!-- <div class="list"> -->
																<!-- <div class="item">StockBrush</div> -->
															<!-- </div> -->
														<!-- </div> -->
														<!-- <div class="item">Font</div> -->
														<!-- <div class="item">Image</div> -->
														<!-- <div class="item">Menu</div> -->
														<!-- <div class="item">Pen</div> -->
														<!-- <div class="item">Region</div> -->
													<!-- </div> -->
												<!-- </div> -->
												<!-- <div class="item">File</div> -->
												<!-- <div class="item">Dir</div> -->
											<!-- </div> -->
										<!-- </div> -->
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Управление классами
								</div>
								<div class="content">
									<?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
										<form name="removeClassForm" method="POST" class="ui form">
											<table class="ui compact celled definition table">
												<thead>
													<tr>
														<td colspan="3">
															<button class="ui basic right floated brown button">
																<i class="trash icon"></i>
															</button>
															<button class="ui basic right floated orange button">
																<i class="edit icon"></i>
															</button>
														</td>
													</tr>
													<tr>
														<th>Выбрать</th>
														<th>Класс</th>
														<th>Суперкласс</th>
													</tr>
												</thead>
												<tbody>
													<?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_0_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_0_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
														<tr>
															<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
" class="form-control"></td>
															<td><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</td>
															<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value->getSuperClassName())===null||$tmp==='' ? "nil" : $tmp);?>
</td>
														</tr>
													<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_local_item;
}
if ($__foreach_class_0_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved_item;
}
?>
												</tbody>
											</table>
										</form>
									<?php } else { ?>
										<h2 align="center">Классы не объявлены</h2>
									<?php }?>
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Создать класс
								</div>
								<div class="content">
									<form name="createClassForm" method="POST" class="ui form">
										<div class="field">
											<label>Суперкласс</label>
											<select name="superClassName" class="dropdown">
												<option>nil</option>
												<?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
													<?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_1_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_1_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</option>
													<?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
												<?php }?>
											</select>
										</div>
										<div class="field">
											<label>Имя класса</label>
											<input type="text" name="className" placeholder="">
										</div>
										<div class="field">
											<label>Тип</label>
											<select name="typeClass" class="dropdown">
												<option value="0">Обычный</option>
												<option value="1">Абстрактный</option>
											</select>
										</div>
										<div class="field">
											<input type="submit" name="createClassButton" value="Создать" class="ui basic positive button">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="ui top attached tabular menu">
						<a class="active item" data-tab="code"><i class="code icon"></i></a>
						<a class="item" data-tab="testing"><i class="terminal icon"></i></a>
						<a class="item" data-tab="generate">Генерация</a>
					</div>
					<div class="ui bottom attached active tab segment" data-tab="code">
						<form name="editMethodForm" class="ui form">
							<div class="field">
								<textarea rows="32"></textarea>
							</div>
							<div class="field">
								<button class="ui basic positive button" type="submit">Сохранить</button>
							</div>
						</form>
					</div>
					<div class="ui bottom attached tab segment" data-tab="testing">
						<form name="testCodeForm" class="ui form">
							<div class="field">
								<textarea rows="16"></textarea>
							</div>
							<div class="field">
								<label>Результат</label>
								<textarea rows="16" readonly></textarea>
							</div>
						</form>
					</div>
					<div class="ui bottom attached tab segment" data-tab="generate">
						Generate
					</div>
				</div>
				<div class="col-md-4">
					<div class="ui styled accordion">
						<div class="title">
							<i class="accordionMethods dropdown icon"></i>
							Методы
						</div>
						<div class="accordionMethods content">
							<div class="accordion">
								<div class="title">
										<i class="dropdown icon"></i>
										Просмотр
								</div>
								<div class="content">
									
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Управление
								</div>
								<div class="content">
										Level 1B Contents
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Создать метод
								</div>
								<div class="content">
									<form name="createMethodForm" class="ui form">
										<div class="field">
											<label>Имя метода</label>
											<input type="text" name="" placeholder="">
										</div>
										<div class="field">
											<label>Тип метода</label>
											<select class="dropdown">
												<option>Обычный</option>
												<option>Абстрактный</option>
											</select>
										</div>
										<div class="field">
											<label>Тип доступа</label>
											<select class="dropdown">
												<option style="color: #6FC17A">PUBLIC</option>
												<option style="color: #E14976">PRIVATE</option>
												<option style="color: #FBA026">PROTECTED</option>
											</select>
										</div>
										<div class="field">
											<button class="ui basic positive button" type="submit">Создать</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="title">
							<i class="dropdown icon"></i>
							Свойства
						</div>
						<div class="content">
							<div class="accordion">
								<div class="title">
										<i class="dropdown icon"></i>
										Просмотр
								</div>
								<div class="content">
									
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Управление
								</div>
								<div class="content">
										Level 1B Contents
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Добавить свойства
								</div>
								<div class="content">
										Level 1C Contents
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Добавить константу
								</div>
								<div class="content">
										Level 1C Contents
								</div>
							</div>
						</div>
						<div class="title">
							<i class="dropdown icon"></i>
							Образы
						</div>
						<div class="content">
							
						</div>
						<div class="title">
							<i class="dropdown icon"></i>
							XML
						</div>
						<div class="content">
							
						</div>
						<div class="title">
							<i class="dropdown icon"></i>
							Словари
						</div>
						<div class="content">
							
						</div>
					</div>
				</div>
			</div>
    </div>
		
		
		<!-- Модальные окна -->
		
		<!-- ############## -->
		
		<?php echo '<script'; ?>
 type="text/javascript">
			
			$(".menu .item").tab();
			
			$('.ui.accordion').accordion();
			
			$('select.dropdown').dropdown();
			
			$('.message .close').on('click', function() {
				$(this).closest('.item').transition('fade');
			});
			
			class UI 
			{
				constructor()
				{
					if (localStorage) {
						localStorage['title'] = "PCM";
						localStorage.clear();
						
						for (var i = 0; i < localStorage.length; i++) {
							var key = localStorage.key(i);
							alert(key);
							this.setAccordionState(key, localStorage[key]);
							console.log(key);
						}
						
					}
				}
				
				/*!
					
					@param state [active, ""]
				
				*/
				
				saveAccordionState(name, state)
				{
					localStorage[name] = state;
				}
				
				setAccordionState(name, state)
				{
					if (state) {
						$(name).addClass("active");
					} else {
						$(name).removeClass("active");
					}
				}
				
			}
			
			var ui = new UI;
			
			var isClick = false;
			
			
			$(".ui.accordion").click(function (accordion) {
				
				
				<!-- if (isClick) { -->
					<!-- ui.saveAccordionState($(accordion), true); -->
					
					<!-- isClick = false; -->
				<!-- } else { -->
					<!-- ui.saveAccordionState($(accordion), false); -->
					
					<!-- isClick = true; -->
				<!-- } -->
				
				
			});
			
		<?php echo '</script'; ?>
>
		
		
	</body>
</html>
<?php }
}
