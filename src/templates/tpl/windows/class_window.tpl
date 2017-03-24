<ul class="nav nav-tabs">
  <li class="active"><a href="#class_hierarchia" data-toggle="tab">Иерархия</a></li>
  <li><a href="#classes" data-toggle="tab">Классы</a></li>
  <li><a href="#create_class" data-toggle="tab">Создать</a></li>
</ul>
<br>
<div class="tab-content">
  <div class="tab-pane active" id="class_hierarchia">
    {$classes_hierarchia}
  </div>
  <div class="tab-pane" id="classes">
    <form name="work_with_classes" method="POST">
      <div class="form-group">
        <div class="content">
          <input type="submit" name="remove_class_button" class="btn btn-danger" value="Удалить">
        </div>
      </div>
      <div class="form-group">
        <table class="table table-hover">
          <tr>
            <th>Имя</th>
            <th>Выбрать</th>
          </tr>
          {foreach from=$classes item=class}
            <tr>
                <td>{$class->getClassName()}</td>
                <td><input type="checkbox" name="select_class[]" value="{$class->getClassName()}" class="form-control"></td>
            </tr>
          {/foreach}
        </table>
      </div>
    </form>
  </div>
  <div class="tab-pane" id="create_class">
    <form name="create_class" method="POST">
      <div class="form-group">
          <label>Имя:</label>
          <input name="class_name" type="text" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Суперкласс:</label>
          <select name="superclass" class="form-control">
                <option value="">nil</option>
              {foreach from=$classes item=class}
                <option value="{$class->getClassName()}">{$class->getClassName()}</option>
              {/foreach}
          </select>
      </div>
      <div class="form-group">
          <label>Тип:</label>
          <select name="class_type" class="form-control">
              <option value="1">Обычный</option>
              <option value="0">Абстрактный</option>
          </select>
      </div>
      <div class="form-group">
          <label>Константы</label>
          <table id="add_const_form">
              <tr>
                  <td><label>Имя</label></td>
                  <td><input id="const_name" type="text" class="form-control"></td>
                  <td><label>Значение</label></td>
                  <td><input id="const_value" type="text" class="form-control"></td>
                  <td><button id="add_const_to_table" type="button" class="btn btn-primary">+</button></td>
              </tr>
          </table>
          <br>
          <table id="consts_table" class="table table-hover">
              <tr>
                  <th>Имя</th>
                  <th>Значение</th>
              </tr>
          </table>
      </div>
      <div class="form-group">
          <label>Атрибуты (через , )</label>
          <div class="row">
              <div class="col-md-4">
                  <fieldset>
                      <legend id="public_var_legend">PUBLIC</legend>
                      <input name="public_vars" type="text" class="form-control">
                  </fieldset>
              </div>
              <div class="col-md-4">
                  <fieldset>
                      <legend id="private_var_legend">PRIVATE</legend>
                      <input name="private_vars" type="text" class="form-control">
                  </fieldset>
              </div>
              <div class="col-md-4">
                  <fieldset>
                      <legend id="protected_var_legend">PROTECTED</legend>
                      <input name="protected_vars" type="text" class="form-control">
                  </fieldset>
              </div>
          </div>
      </div>
      <div class="form-group">
          <input name="create_class_button" type="submit" class="btn btn-md btn-success" value="Создать класс">
      </div>
  </form>
  </div>
</div>
