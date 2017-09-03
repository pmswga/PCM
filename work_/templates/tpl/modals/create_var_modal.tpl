<div class="ui small modal" id="createVarModal">
  <div class="header">
    Создание нового метода
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form name="createVarForm" method="POST" class="ui form">
            {if $images != NULL}
              <div class="field">
                <label>Класс</label>
                <select name="class" class="form-control">
                  {foreach from=$classes item=class}
                    <option>{$class->getClassName()}</option>
                  {/foreach}
                </select>
              </div>
              <div class="field">
                <label>Имя</label>
                <input type="text" name="varName" class="form-control">
              </div>
              <div class="field">
                <label>Доступ</label>
                <select name="varAccessType" class="form-control">
                  <option value="1">PRIVATE</option>
                  <option value="0">PUBLIC</option>
                  <option value="2">PROTECTED</option>
                </select>
              </div>
              <div class="field">
                <label>Тип</label>
                <select name="varType" class="form-control">
                  <option value="0">Обычное</option>
                  <option value="1">Статическое</option>
                </select>
              </div>
              <div class="field">
                <input type="submit" name="createVarButton" value="Создать" class="ui button">
              </div>
            {else}
              <h3 align="center">Создайте образ</h3>
            {/if}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>