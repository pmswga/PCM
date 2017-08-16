<!DOCTYPE html>
<html>
  <head>
    <title>
      {if $currentImage != NULL}      
        {$currentImage} | Workspace
      {else}
        IDE Smart PHP
      {/if}
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tabulation.js"></script>
		<script type="text/javascript" src="js/uiapp.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          {include "blocks/menu.tpl"}
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <fieldset>
                <legend>Иерархия классов</legend>
                {if $classHierarchia != NULL}
                  <div id="hierarchia" class="ui bulleted list">
                    {$classHierarchia}
                  </div>
                {else}
                  <h3 align="center">Классы не объявлены</h3>
                {/if}
              </fieldset>
            </div>
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#vars">Свойства</a>
                            </h4>
                          </div>
                          <div id="vars" class="panel-collapse collapse in">
                            <div class="panel-body" id="vars-table"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" href="#methods">Методы</a>
                            </h4>
                          </div>
                          <div id="methods" class="panel-collapse collapse in">
                            <div class="panel-body" id="methods-table"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <legend>Редактирование метода <span id="currentEditMethod"></span></legend>
                    <form name="editCodeMethodForm" method="POST">
                      <div class="form-group">                    
                        <textarea rows="15" name="src" class="form-control" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="editClass" value="">
                        <input type="hidden" name="editMethod" value="">
                        <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="btn btn-primary pull-right">
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal windows -->
    
    {include "modals/create_class_modal.tpl"}
    {include "modals/create_image_modal.tpl"}
    {include "modals/view_images_modal.tpl"}
    {include "modals/select_current_image_modal.tpl"}
    {include "modals/create_var_modal.tpl"}
    {include "modals/create_method_modal.tpl"}
    
    <!-- Status bar -->
    {include "blocks/status_bar.tpl"}
    
    <script type="text/javascript">
    
      var classes = [];
      
      $("a.class").each(function(index, value){
        let class_name = $(value).attr("href");
        class_name = class_name.substr(1, class_name.length);
        
        classes.push(class_name);
      });
      
      
      let app = new UIApp(classes);
      app.getClassMembers();
      
      $("a.class").on("click", function(){
        
        var selectedClassName = $(this).attr("href");
        selectedClassName = selectedClassName.substr(1, selectedClassName.length);
        
        app.setCurrentClass(selectedClassName);
        app.getClassMembers();
        
      });
      
      $(document).on("click", "a.method", function(){
      
        var selectedMethodName = $(this).attr("href");
        selectedMethodName = selectedMethodName.substr(1, selectedMethodName.length);
        
        app.getMethodSrc(selectedMethodName);
      });
            
      $("[data-toggle='tooltip']").tooltip();
      $("[data-toggle='popover']").popover();
      
    </script>
    
  </body>
</html>