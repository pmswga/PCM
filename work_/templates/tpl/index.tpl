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
    <style rel="stylesheet">
      
      table tr th {
        text-align: center;
      }
      
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tabulation.js"></script>
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
                  <form name="editCodeMethodForm" method="POST">
                    <div class="form-group">                    
                      <textarea rows="15" name="src" class="form-control" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="editClass" value="">
                      <input type="hidden" name="editMethod" value="">
                      <input type="submit" name="saveCodeMethodButton" value="Сохранить" class="btn btn-primary">
                    </div>
                  </form>
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
    {if $msgs != NULL}
      <div id="status_bar">
        {foreach from=$msgs item=msg}
          <div class="message bg-{$msg['type']}"
            data-toggle="popover" 
            data-placement="top"                  
            data-html="true"
            {if $msg['type'] == "success"}
              title="Уведомление"
            {elseif $msg['type'] == "info"}
              title="Информация"
            {elseif $msg['type'] == "warning"}
              title="Предупреждение"
            {elseif $msg['type'] == "danger"}
              title="Ошибка"
            {/if}
            data-content="{$msg['msg']}">
            {if $msg['type'] == "success"}
              <a href="#">S</a>
            {elseif $msg['type'] == "info"}
              <a href="#">I</a>
            {elseif $msg['type'] == "warning"}
              <a href="#">W</a>
            {elseif $msg['type'] == "danger"}
              <a href="#">D</a>
            {/if}
          </div>
        {/foreach}
      </div>
    {/if}
    
    <script type="text/javascript">
    
      var className = "nil", methodName = "";
      
      $("a.class").click(function(){
        
        var selectedClassName = $(this).attr("href");
        selectedClassName = selectedClassName.substr(1, selectedClassName.length);
        className = selectedClassName;
        
        $.ajax({
          url: "php/getVars.php",
          type: "post",
          data: "className=" + selectedClassName,
          success: function (replay) {
            $("#vars-table").html(" ");
            $("#vars-table").html(replay);
          }
        });
        
        $.ajax({
          url: "php/getMethods.php",
          type: "post",
          data: "className=" + selectedClassName,
          success: function (replay) {
            $("#methods-table").html(" ");
            $("#methods-table").html(replay);
          }
        });
        
      });
      
      
      $(document).on("click", "a.method", function(){
        
        if (className != "nil") {
        
          var selectedMethodName = $(this).attr("href");
          selectedMethodName = selectedMethodName.substr(1, selectedMethodName.length);
          methodName = selectedMethodName;
        
          $.ajax({
            url: "php/getMethodSrc.php",
            type: "post",
            data: "className=" + className + "&methodName=" + selectedMethodName,
            success: function (replay) {
              $("#methodCode").text("");
              $("#methodCode").text(replay);
              
              $("[name='editMethod']").attr("value", methodName);
              $("[name='editClass']").attr("value", className);
              
            }
          });
          
        } else {
          alert("Select class");
        }
        
      });
            
      $("[data-toggle='tooltip']").tooltip();
      $("[data-toggle='popover']").popover();
      
    </script>
    
  </body>
</html>