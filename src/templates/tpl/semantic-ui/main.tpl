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
			
			[name='createClassForm'] .field:last-child, [name="editMethodForm"] .field:last-child {
				display: flex;
				justify-content: flex-end;
			}
			
			 {
				display: flex;
				align-items: center;
				background-color: orange;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
      <div class="row">
				<div class="col-md-12">
					<div id="main_menu" class="ui small top menu">
						<a class="item">
							Метрика
						</a>
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
						<div class="right menu">
							<div class="item">
									<div class="ui success message">
										<i class="close icon"></i>
										<div class="header">
											Your user registration was successful.
										</div>
										<p>You may now log-in with the username you have chosen</p>
									</div>
								</div>
							</div>
							<!-- <div class="item"> -->
								<!-- <div class="ui icon input"> -->
									<!-- <input type="text" placeholder="Поиск класса..."> -->
									<!-- <i class="search link icon"></i> -->
								<!-- </div> -->
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 15px;">
				<div class="col-md-4">
					<div class="ui styled accordion">
						<div class="active title">
							<i class="dropdown icon"></i>
							Классы
						</div>
						<div class="active content">
							<div class="accordion">
								<div class="title">
										<i class="dropdown icon"></i>
										Иерархия
								</div>
								<div class="content">
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
													<button class="ui right floated negative button">
														Удалить все
													</button>
													<button class="ui right floated negative button">
														Удалить
													</button>
													<button class="ui right floated secondary button">
														Изменить
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
											<button class="ui button" type="submit">Создать</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ui top attached tabular menu">
						<a class="active item" data-tab="code">Код</a>
						<a class="item" data-tab="testing">Тестирование</a>
						<a class="item" data-tab="images">Образы</a>
						<a class="item" data-tab="generate">Генерация</a>
					</div>
					<div class="ui bottom attached active tab segment" data-tab="code">
						<form name="editMethodForm" class="ui form">
							<div class="field">
								<textarea rows="32"></textarea>
							</div>
							<div class="field">
								<button class="ui button" type="submit">Сохранить</button>
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
					<div class="ui bottom attached tab segment" data-tab="images">
						Images
					</div>
					<div class="ui bottom attached tab segment" data-tab="generate">
						Generate
					</div>
				</div>
				<div class="col-md-4">
					<div class="ui styled accordion">
						<div class="active title">
							<i class="dropdown icon"></i>
							Методы
						</div>
						<div class="active content">
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
											<button class="ui button" type="submit">Создать</button>
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
					</div>
				</div>
			</div>
    </div>
		
		<script type="text/javascript">
			
			$(".menu .item").tab();
			
			$('.ui.accordion').accordion();
			
			$('select.dropdown').dropdown();
			
			$('.message .close').on('click', function() {
				$(this).closest('.message').transition('fade');
			});
			
		</script>
		
	</body>
</html>
