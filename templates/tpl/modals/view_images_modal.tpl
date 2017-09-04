<div class="modal fade" id="viewImagesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Все образы</h4>
      </div>
      <div class="modal-body">
        <form name="workWithImageForm" method="POST">
          {if $images != NULL}
            <table class="table table-bordered">
              <tr>
                <th>Имя</th>
                <th>Классов</th>
                <th>Методов</th>
                <th>Свойств</th>
              </tr>
              {foreach from=$images item=image}        
                <tr>
                  <td><a href="#{$image->getImageName()}">{$image->getImageName()}</a></td>
                  <td>{count($image->getClasses())}</td>
                  <td>~</td>
                  <td>~</td>
                </tr>
              {/foreach}
            </table>
          {else}
            <h3 align="center">Образов нет</h3>
          {/if}
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->