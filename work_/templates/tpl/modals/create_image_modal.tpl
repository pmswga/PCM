<div class="modal fade" id="createImageModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Добавить образ</h4>
      </div>
      <div class="modal-body">
        <form name="createImageForm" method="POST">
          <div class="form-group">
            <label>Имя образа</label>
            <input type="text" name="imageName" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" name="createImageButton" value="Создать" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->