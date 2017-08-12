<div class="modal fade" id="createMethodModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить метод</h4>
      </div>
      <div class="modal-body">
        <form name="createMethodForm" method="POST">
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
              <label>Имя метода</label>
              <input type="text" name="methodName" class="form-control">
            </div>
            <div class="form-group">
              <label>Тип метода</label>
              <select name="methodType" class="form-control">
                <option value="0" >Обычный</option>
                <option value="1" >Абстрактный</option>
              </select>
            </div>
            <div class="form-group">
              <label>Тип доступа</label>
              <select name="methodAccessType" class="form-control">
                <option value="0" style="color: #6FC17A">PUBLIC</option>
                <option value="1" style="color: #E14976">PRIVATE</option>
                <option value="2" style="color: #FBA026">PROTECTED</option>
              </select>
            </div>
            <div class="form-group">
              <label>Аргументы (через ,)</label>
              <input type="text" name="methodArgs" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="createMethodButton" value="Создать" class="btn btn-primary">
            </div>
          {else}
            <h3 align="center">Создайте образ</h3>
          {/if}
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->