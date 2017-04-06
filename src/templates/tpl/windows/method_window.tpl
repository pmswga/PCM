<ul class="nav nav-tabs">
  <li class="active"><a href="#class_methods" data-toggle="tab">Методы</a></li>
  <li><a href="#create_method" data-toggle="tab">Создать</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_methods">
		<br>
		<div class="panel-group" id="methods">
			{foreach from=$classes item=class}
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#{$class->getClassName()}">{$class->getClassName()}</a>
						</h4>
					</div>
					<div id="{$class->getClassName()}" class="panel-collapse collapse">
						<div class="panel-body">
							<table class="table table-bordered">
								<tr>
									<th>Метод</th>
									<th>Аргументы</th>
								</tr>
								{foreach from=$class->getMethods() item=method}
									<tr>
										<td><a href="#" onclick="editMethod('{$class->getClassName()}', '{$method->getName()}')">{$method->getName()}</a></td>
										<td>
											{foreach from=$method->getArgs() item=arg}
												{$arg},
											{/foreach}
										</td>
									</tr>
								{/foreach}
							</table>
						</div>
					</div>
				</div>
			{/foreach}
		</div>
  </div>
  <div class="tab-pane" id="create_method">
    <br>
    <form name="createMethodForm" method="POST">
      <div class="form-group">
        <label>Название метода</label>
        <input type="text" name="method_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Тип метода</label>
        <select name="method_type" class="form-control">
          <option value="0">Обычный</option>
          <option value="1">Статический</option>
          <option value="2">Абстрактный</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Класс</label>
        <select name="method_class" class="form-control">
          {foreach from=$classes item=class}
            <option value="{$class->getClassName()}">{$class->getClassName()}</option>
          {/foreach}
        </select>
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_access_type" class="form-control">
          <option value="0">Public</option>
          <option value="1">Private</option>
          <option value="2">Protected</option>
        </select>
      </div>
			<div class="form-group">
				<label>Аргументы (через , )</label>
				<input type="text" name="method_args" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="createMethodButton" value="Создать" class="btn btn-primary">
			</div>
    </form>
  </div>
</div>
