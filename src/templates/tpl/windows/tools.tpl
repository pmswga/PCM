<div class="ui top attached tabular menu">
	<a class="active item" data-tab="code"><i class="code icon"></i></a>
	<a class="item" data-tab="testing"><i class="terminal icon"></i></a>
	<a class="item" data-tab="generate">Генерация</a>
</div>
<div class="ui bottom attached active tab segment" data-tab="code">
	<form name="editMethodForm" class="ui form">
		<div class="field">
			<textarea rows="32" onkeydown="insertTab(this, event);"></textarea>
		</div>
		<div class="field">
			<button class="ui basic positive button" type="submit">Сохранить</button>
		</div>
	</form>
</div>
<div class="ui bottom attached tab segment" data-tab="testing">
	<form name="testCodeForm" class="ui form">
		<div class="field">
			<textarea name="test_code" rows="16" onkeydown="insertTab(this, event);"></textarea>
		</div>
		<div class="field">
			<label>Результат</label>
			<textarea id="result_of_code" rows="16" readonly></textarea>
		</div>
	</form>
</div>
<div class="ui bottom attached tab segment" data-tab="generate">
	Generate
</div>