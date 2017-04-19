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
				<form name="workWithMethodsForm" method="POST" class="ui form">
					<table class="ui compact celled definition table">
						<thead>
							<tr>
								<td colspan="4">
									<input type="submit" name="removeMethodButton" value="Удалить" class="ui basic right floated brown button">
									<button type="submit" class="ui basic right floated orange button">
										<i class="edit icon"></i>
									</button>
								</td>
							</tr>
							<tr>
								<th>Выбрать</th>
								<th>Метод</th>
								<th>Аргументы</th>
								<th>Тип</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="selectedMethod[]" value="" class="form-control"></td>
								<td><a href="#edit">hw</a></td>
								<td>a, b, c</td>
								<td>Обычный</td>
							</tr>
						</tbody>
					</table>
				</form>
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
				<form name="workWithИVarsForm" method="POST" class="ui form">
					<table class="ui compact celled definition table">
						<thead>
							<tr>
								<td colspan="4">
									<input type="submit" name="removeVarButton" value="Удалить" class="ui basic right floated brown button">
									<button type="submit" class="ui basic right floated orange button">
										<i class="edit icon"></i>
									</button>
								</td>
							</tr>
							<tr>
								<th>Выбрать</th>
								<th>Доступ</th>
								<th>Имя</th>
								<th>Тип</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="checkbox" name="selectedVar[]" value="" class="form-control"></td>
								<td>PUBLIC</td>
								<td><a href="#edit">a</a></td>
								<td>Переменная</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Добавить свойства
			</div>
			<div class="content">
				<form name="createVarForm" method="POST" class="ui form">
					<div class="field">
						<label>Имя</label>
						<input type="text">
					</div>
					<div class="field">
						<label>Доступ</label>
						<select class="dropdown">
							<option>PUBLIC</option>
							<option>PRIVATE</option>
							<option>PROTECTED</option>
						</select>
					</div>
					<div class="field">
						<label>Тип</label>
						<select class="dropdown">
							<option>Обычное</option>
							<option>Статическое</option>
						</select>
					</div>
					<div class="field">
						<input type="submit" name="createVarButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
			<div class="title">
					<i class="dropdown icon"></i>
					Добавить константу
			</div>
			<div class="content">
				<form name="createConstForm" method="POST" class="ui form">
					<div class="field">
						<label>Имя</label>
						<input type="text">
					</div>
					<div class="field">
						<label>Доступ</label>
						<select class="dropdown">
							<option>PUBLIC</option>
							<option>PRIVATE</option>
							<option>PROTECTED</option>
						</select>
					</div>
					<div class="field">
						<label>Тип</label>
						<select class="dropdown">
							<option>Обычное</option>
							<option>Статическое</option>
						</select>
					</div>
					<div class="field">
						<label>Значение</label>
						<input type="number">
					</div>
					<div class="field">
						<input type="submit" name="createConstButton" value="Создать" class="ui basic positive button">
					</div>
				</form>
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
		<div class="accordion">
			<div class="title">
				<i class="dropdown icon"></i>
				Просмотр
			</div>
			<div class="content">
			
			</div>
			<div class="title">
				<i class="dropdown icon"></i>
				Создать словарь
			</div>
			<div class="content">
				<form name="createDictionary" method="POST" class="ui form">
					<div class="field">
						<label>Название</label>
						<input type="text" name="dictionaryName">
					</div>
					<div class="field">
						<label>Кол-во записей</label>
						<input type="number" name="countEntries" min="1" max="100">
					</div>
					<div class="field">
						<input type="submit" value="Создать" class="ui basic positive button">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>