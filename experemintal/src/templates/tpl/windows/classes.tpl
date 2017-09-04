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
					<div id="hierarchia" class="ui bulleted list">
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