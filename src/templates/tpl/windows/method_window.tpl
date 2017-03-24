<ul class="nav nav-tabs">
  <li class="active"><a href="#class_methods" data-toggle="tab">Методы</a></li>
  <li><a href="#create_method" data-toggle="tab">Создать</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_methods">
    class_methods
  </div>
  <div class="tab-pane" id="create_method">
    <br>
    <form name="createMethodForm">
      <div class="form-group">
        <label>Название метода</label>
        <input type="text" name="method_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_type" class="form-control">
          <option value="standart">Обычный</option>
          <option value="static">Статический</option>
          <option value="abstract">Абстрактный</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">Класс</label>
        <select name="class" class="form-control">
          {foreach from=$classes item=class}
            <option value="{$class->getClassName()}">{$class->getClassName()}</option>
          {/foreach}
        </select>
      </div>
      <div class="form-group">
        <label for="">Модификатор доступа</label>
        <select name="method_access_type" class="form-control">
          <option value="public">Public</option>
          <option value="private">Private</option>
          <option value="protected">Protected</option>
        </select>
      </div>
    </form>
  </div>
</div>
