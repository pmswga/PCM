<div class="ui small modal" id="selectCurrnetImageModal">
  <div class="header">
    Выбрать образ по умолчанию
  </div>
  <div class="content">
    <form name="selectCurrnetImageForm" method="POST" class="ui form">
      {if $images != NULL}
        <div class="field">
          <label>Образ</label>
          <select name="currentImage" class="form-control">
            {foreach from=$images item=image}        
              <option value="{$image->getImageName()}">{$image->getImageName()}</option>
            {/foreach}                
          </select>
        </div>
        <div class="field">
          <input type="submit" name="selectCurrnetImageButton" value="Выбрать" class="ui button">
        </div>
      {else}
        <h3 align="center">Создайте образы, чтобы выбрать какой-нибудь по умолчанию</h3>
      {/if}
    </form>
  </div>
</div>