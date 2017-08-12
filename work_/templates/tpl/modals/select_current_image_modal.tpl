<div class="modal fade" id="selectCurrnetImageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Все образы</h4>
      </div>
      <div class="modal-body">
        <form name="selectCurrnetImageForm" method="POST">
          {if $images != NULL}
            <div class="form-group">
              <label>Образ</label>
              <select name="currentImage" class="form-control">
                {foreach from=$images item=image}        
                  <option value="{$image->getImageName()}">{$image->getImageName()}</option>
                {/foreach}                
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="selectCurrnetImageButton" value="Выбрать" class="btn btn-primary">
            </div>
          {else}
            <h3 align="center">Создайте образ</h3>
          {/if}
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->