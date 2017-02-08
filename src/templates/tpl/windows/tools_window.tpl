<ul class="nav nav-tabs">
  <li class="active"><a href="#class_method_code" data-toggle="tab">Код метода</a></li>
  <li><a href="#images" data-toggle="tab">Образы</a></li>
  <li><a href="#generate_code" data-toggle="tab">Генерация кода</a></li>
  <li></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="class_method_code">
    <form name="" method="POST">
      <textarea name="code" rows="25" class="form-control" onkeydown="insertTab(this, event);"></textarea>
    </form>
  </div>
  <div class="tab-pane" id="images">
    <div class="row">
      <div class="col-md-4">
        <fieldset>
          <legend>Создать образ</legend>
          <form name="create_image" method="POST">
            <div class="form-group">
                <label>Название:</label>
                <input name="image_name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Выберете классы:</label>
                <table class="table table-hover">
                    <tr>
                      <th>Класс</th>
                      <th>Выбрать</th>
                    </tr>
                    {foreach from=$classes item=class}
                      <tr>
                          <td>{$class->getClassName()}</td>
                          <td><input name="add_class[]" value="{$class->getClassName()}" type="checkbox" class="form-control"></td>
                      </tr>
                    {/foreach}
                </table>
            </div>
            <div class="form-group">
                <input name="create_image_button" type="submit" class="btn btn-md btn-success" value="Собрать">
            </div>
          </form>
        </fieldset>
      </div>
      <div class="col-md-4">
        <fieldset>
          <legend>Временный образ</legend>
          <form name="work_with_tmp_image" method="POST">
            <input type="submit" name="delete_tmp_image" value="Очистить образ" class="btn btn-danger">
            <br>
            <br>
            <table class="table table-hover">
              <tr>
                <th>Имя:</th>
                <td>{$tmp_image->getName()}</td>
              </tr>
              <tr>
                <th>Классы:</th>
                <td>{$classes_hierarchia}</td>
              </tr>
              <tr>
                <th>Файлы классов:</th>
                <td>
                  <ul>
                  {foreach from=$tmp_image->getFileNamesOfClasses() item=class_file}
                    <li>{$class_file}</li>
                  {/foreach}
                  </ul>
                </td>
              </tr>
            </table>
          </form>
        </fieldset>
      </div>
      <div class="col-md-4">
        <fieldset>
          <legend>Готовые образы</legend>
          <form name="work_with_images" method="POST">
            <div id="manage_images" class="form-group">
                <input name="delete_image_button" type="submit" class="btn btn-danger" value="Удалить">
                <input name="export_image_button" type="submit" class="btn btn-warning" value="Экспортировать">
            </div>
            <div class="form-group">
            {if $images != NULL}
                <div class="panel-group" id="final_images">
                {foreach from=$images item=image}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#final_images" href="#{$image->getName()}">{$image->getName()}</a>
                              <input name="select_image[]" type="checkbox" value="{$image->getName()}">
                            </h4>
                        </div>
                        <div id="{$image->getName()}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <label>Классы в составе образа:</label>
                                <ul>
                                {foreach from=$image->getClasses() item=class}
                                    <li>{$class->getClassName()}</li>
                                {/foreach}
                                </ul>
                                <hr>
                                <input type="submit" class="btn btn-warning" value="Изменить">
                            </div>
                        </div>
                    </div>
                {/foreach}
                </div>
            {else}
                <h3 align="center">Образов нет</h3>
            {/if}
            </div>
          </form>
        </fieldset>
      </div>
    </div>
    
    
    
  </div>
  <div class="tab-pane" id="generate_code">
    generate_code
  </div>
</div>