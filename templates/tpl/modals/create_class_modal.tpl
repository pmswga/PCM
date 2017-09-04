<div class="ui small modal" id="createClassModal">
  <div class="header">
    Создать новый класс
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="sixteen wide column">
          <form class="ui form" method="POST">
            {if $currentImage != NULL}
              <div class="field">
                <label>Суперкласс</label>
                <select name="superClassName" class="dropdown">
                  <option>nil</option>
                  {if $classes != NULL}
                    {foreach from=$classes item=class}
                      <option value="{$class->getClassName()}">{$class->getClassName()}</option>
                    {/foreach}
                  {/if}
                </select>
              </div>
              <div class="field">
                <label>Имя класса</label>
                <input type="text" name="className" class="form-control" placeholder="">
              </div>
              <div class="field">
                <label>Тип</label>
                <select name="typeClass" class="form-control">
                  <option value="0">Обычный</option>
                  <option value="1">Абстрактный</option>
                </select>
              </div>
              <div class="field">         
                <input type="submit" name="createClassButton" value="Создать" class="ui button">
              </div>
            {else}
              <h3 align="center">Выбирете образ по умолчанию</h3>
            {/if}
          </form>
        </div>
      </div>
    </div>
  </div>
</div>