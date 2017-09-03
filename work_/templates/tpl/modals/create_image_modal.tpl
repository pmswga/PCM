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
                <th colspan="">Существующие образы</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$images item=image}        
                <tr>
                  <td><a href="#{$image->getImageName()}">{$image->getImageName()}</a></td>
                  <!-- <td>{count($image->getClasses())}</td> -->
                  <!-- <td>~</td> -->
                  <!-- <td>~</td> -->
                </tr>
              {/foreach}
            </tbody>
          </table>
        </div>
        <div class="eight wide column">
          <form name="createImageForm" method="POST" class="ui form">          
            <div class="field">
              <label>Имя образа</label>
              <input type="text" name="imageName">
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