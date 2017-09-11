<div class="ui small modal" id="createMethodModal">
  <div class="header">
    Создать новый метод
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form name="createMethodForm" method="POST" class="ui form">
            {if $currentImage != NULL}
              <div class="field">
                <label>Класс</label>
                <select name="class" class="dropdown">
                  {foreach from=$classes item=class}
                    <option>{$class->getClassName()}</option>
                  {/foreach}
                </select>
              </div>
              <div class="field">
                <label>Имя метода</label>
                <input type="text" name="methodName">
              </div>
              <div class="field">
                <label>Тип метода</label>
                <select name="methodType">
                  <option value="0">Обычный</option>
                  <option value="1">Статический</option>
                  <option value="2">Абстрактный</option>
                </select>
              </div>
              <div class="field">
                <label>Тип доступа</label>
                <select name="methodAccessType">
                  <option value="0" style="color: #6FC17A">PUBLIC</option>
                  <option value="1" style="color: #E14976">PRIVATE</option>
                  <option value="2" style="color: #FBA026">PROTECTED</option>
                </select>
              </div>
              <div class="field">
                <label>Аргументы (через ,)</label>
                <input type="text" name="methodArgs">
              </div>
              <div class="field">
                <input type="submit" name="createMethodButton" value="Создать" class="ui button">
              </div>
            {else}
              <h3 align="center">Выберете образ по умолчанию</h3>
            {/if}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>