<div class="ui internally celled grid">
  <div class="row">
    <div class="ten wide column">
      <form name="editCodeMethodForm" method="POST" class="ui form">
        <div class="field">
          <h3>Редактирование метода <span id="currentEditMethod"></span></h3>
          <textarea rows="15" name="src" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
        </div>
        <div class="field">
          <input type="hidden" name="editClass" value="">
          <input type="hidden" name="editMethod" value="">
          <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="ui button">
        </div>
      </form>
    </div>
    <div class="six wide column">
       <div class="ui styled accordion">
        <div class="title">
          <i class="dropdown icon"></i>
          Свойства
        </div>
        <div class="content">                            
          <div class="panel-body" id="vars-table"></div>
        </div>
      </div>
      <div class="ui styled accordion">
        <div class="title">
          <i class="dropdown icon"></i>
          Методы
        </div>
        <div class="content">                            
          <div class="panel-body" id="methods-table"></div>
        </div>
      </div>
    </div>
  </div>
</div>