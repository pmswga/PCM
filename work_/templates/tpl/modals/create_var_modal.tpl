<div class="modal fade" id="createVarModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить свойство</h4>
      </div>
      <div class="modal-body">
        <form name="createVarForm" method="POST">
          {if $images != NULL}
            <div class="form-group">
              <label>Класс</label>
              <select name="class" class="form-control">
                {foreach from=$classes item=class}
                  <option>{$class->getClassName()}</option>
                {/foreach}
              </select>
            </div>
            <div class="form-group">
              <label>Имя</label>
              <input type="text" name="varName" class="form-control">
            </div>
            <div class="form-group">
              <label>Доступ</label>
              <select name="varAccessType" class="form-control">
                <option value="0">PUBLIC</option>
                <option value="1">PRIVATE</option>
                <option value="2">PROTECTED</option>
              </select>
            </div>
            <div class="form-group">
              <label>Тип</label>
              <select name="varType" class="form-control">
                <option value="0">Обычное</option>
                <option value="1">Статическое</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="createVarButton" value="Создать" class="btn btn-primary">
            </div>
          {else}
            <h3 align="center">Создайте образ</h3>
          {/if}
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->