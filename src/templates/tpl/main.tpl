<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/vt.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tabulation.js"></script>
		<link rel="stylesheet" type="text/css" href="css/semantic/dist/semantic.min.css">
		<script src="css/semantic/dist/semantic.min.js"></script>
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
										{$countImages|default:0}
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Классов
									</div>
									<div class="value">
										{$countClasses|default:0}
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Свойств
									</div>
									<div class="value">
										{$countVars|default:0}
									</div>
								</div>
								<div class="statistic">
									<div class="label">
										Методов
									</div>
									<div class="value">
										{$countMethods|default:0}
									</div>
								</div>
							</div>
						</div>
						{if $messageStatus != NULL}
							<div class="item">
								<div class="ui {$messageStatus} message">
									<i class="close icon"></i>
									<div class="header">{$messageHeader}</div>
									<p>{$messageContent}</p>
								</div>
							</div>
						{/if}
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
									{if $classHierarchia != NULL}
										<div class="ui bulleted list">
											{$classHierarchia}
										</div>
									{else}
										<h2 align="center">Классы не объявлены</h2>
									{/if}
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
									{if $classes != NULL}
										<form name="removeClassForm" method="POST" class="ui form">
											<table class="ui compact celled definition table">
												<thead>
													<tr>
														<td colspan="3">
															<input type="submit" name="removeClassButton" value="Удалить" class="ui basic right floated brown button">
															<button type="submit" class="ui basic right floated orange button">
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
													{foreach from=$classes item=class}
														<tr>
															<td><input type="checkbox" name="selectedClass[]" value="{$class->getClassName()}" class="form-control"></td>
															<td>{$class->getClassName()}</td>
															<td>{$class->getSuperClassName()|default:"nil"}</td>
														</tr>
													{/foreach}
												</tbody>
											</table>
										</form>
									{else}
										<h2 align="center">Классы не объявлены</h2>
									{/if}
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
												{if $classes != NULL}
													{foreach from=$classes item=class}
														<option value="{$class->getClassName()}">{$class->getClassName()}</option>
													{/foreach}
												{/if}
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
		
		<script type="text/javascript">
			
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
			
		</script>
		
		
	</body>
</html>
