<div class="ui small modal" id="createImageModal">
  <div class="header">
    Создать новый образ
  </div>
  <div class="content">
    <div class="ui grid">
      <div class="row">
        <div class="eight wide column">
          <table class="ui celled striped table">
            <thead>
              <tr>
                <th>Существующие образы</th>
              </tr>
            </thead>
            <tbody>
              {if $images != NULL}                
                {foreach from=$images item=image}        
                  <tr>
                    <td>{$image->getImageName()}</td>
                  </tr>
                {/foreach}
              {else}
                <tr><td>Образов нет</td></tr>
              {/if}
            </tbody>
          </table>
        </div>
        <div class="eight wide column">
          <form name="createImageForm" method="POST" class="ui form">          
            <div class="field">
              <label>Название</label>
              <input type="text" name="imageName">
            </div>
            <div class="field">
              <label>Описание</label>
              <textarea name="imageDescp"></textarea>
            </div>
            <div class="field">
              <input type="submit" name="createImageButton" value="Создать" class="ui button">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>