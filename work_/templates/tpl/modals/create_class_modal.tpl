<div class="modal fade" id="createClassModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить класс</h4>
      </div>
      <div class="modal-body">
        <form name="createClassForm" method="POST">
          <div class="form-group">
            <label>Суперкласс</label>
            <select name="superClassName" class="form-control">
              <option>nil</option>
              {if $classes != NULL}
                {foreach from=$classes item=class}
                  <option value="{$class->getClassName()}">{$class->getClassName()}</option>
                {/foreach}
              {/if}
            </select>
          </div>
          <div class="form-group">
            <label>Имя класса</label>
            <input type="text" name="className" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label>Тип</label>
            <select name="typeClass" class="form-control">
              <option value="0">Обычный</option>
              <option value="1">Абстрактный</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="createClassButton" value="Создать" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->