<?php
/* Smarty version 3.1.29, created on 2017-04-13 21:40:49
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\semantic-ui\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58efc631c09b93_92405813',
  'file_dependency' => 
  array (
    'f6111604d8ace131af7b3436c3711462378db57d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\semantic-ui\\main.tpl',
      1 => 1492108849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58efc631c09b93_92405813 ($_smarty_tpl) {
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
										22
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Классов
									</div>
									<div class="value">
										107
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Свойств
									</div>
									<div class="value">
										543
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Методов
									</div>
									<div class="value">
										2552
									</div>
								</div>
							</div>
						</div>
						<div class="item">
								<div class="ui success message">
									<i class="close icon"></i>
									<div class="header">
										Образ успешно собран
									</div>
									<p>Давным давно я был один и стал я очень добр к тем, кто спас меня от одиночества</p>
								</div>
						</div>
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
									<div class="ui bulleted list">
										<div class="item">
											<div>Object</div>
											<div class="list">
												<div class="item">
													<div>GraphicsTools</div>
													<div class="list">
														<div class="item">AcceleratorTable</div>
														<div class="item">
															<div>Brush</div>
															<div class="list">
																<div class="item">StockBrush</div>
															</div>
														</div>
														<div class="item">Font</div>
														<div class="item">Image</div>
														<div class="item">Menu</div>
														<div class="item">Pen</div>
														<div class="item">Region</div>
													</div>
												</div>
												<div class="item">File</div>
												<div class="item">Dir</div>
											</div>
										</div>
									</div>
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Управление классами
								</div>
								<div class="content">
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
											<tr>
												<td><input type="checkbox" class="form-control"></td>
												<td>
													Object
												</td>
												<td>
													nil
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="title">
										<i class="dropdown icon"></i>
										Создать класс
								</div>
								<div class="content">
									<form name="createClassForm" class="ui form">
										<div class="field">
											<label>Суперкласс</label>
											<select class="dropdown">
												<option value="nil">nil</option>
											</select>
										</div>
										<div class="field">
											<label>Имя класса</label>
											<input type="text" name="" placeholder="">
										</div>
										<div class="field">
											<label>Тип</label>
											<select class="dropdown">
												<option>Обычный</option>
												<option>Абстрактный</option>
											</select>
										</div>
										<div class="field">
											<button class="ui basic positive button" type="submit">Создать</button>
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
										Добавить свойсвто
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
				$(this).closest('.message').transition('fade');
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