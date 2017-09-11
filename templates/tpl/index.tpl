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
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/semantic.js"></script>
	  <script type="text/javascript" src="js/tabulation.js"></script> 
		<script type="text/javascript" src="js/uiapp.js"></script>
  </head>
  <body>
    {$image_no_set = "Не выбран образ по умолчанию"}
  
    {include file="blocks/menu.tpl"}
    <div id="content" class="ui divided grid">
      <div class="row">
        <div class="four wide column">
          <div class="row">
            <div class="sixteen wide column">
              {if $msgs != NULL}              
                {include file="blocks/status_bar.tpl"}
              {/if}
            </div>
          </div>
          <br>
          <div class="row">
            <div class="sixteen wide column">
              {function menu}
                <ul class="ui list" id="hierarchia">
                  {foreach from=$data item=entry}
                    <li class="item">
                      <i class="folder icon"></i>
                      <div class="content">
                        <div class="header"><a href="#{$entry['supclass']->getClassName()}" class="class">{$entry['supclass']->getClassName()}</a></div>
                        {if is_array($entry['subclass'])}
                          <ul class="list">
                            {menu data=$entry["subclass"]}
                          </ul>
                        {/if}
                      </div>
                    </li>
                  {/foreach}
                </ul>
              {/function}
              {if $classHierarchia != NULL}
                <fieldset>
                  <legend><h1>Иерархия классов</h1></legend>
                    {menu data=$classHierarchia}
                </fieldset>
              {/if}
            </div>
          </div>
        </div>
        <div class="twelve wide column">
          <div class="ui divided grid">
            <div class="row">
              <div class="sixteen wide column">
                {include file="blocks/tool_bar.tpl"}
              </div>
            </div>
            <div class="row">
              <div class="sixteen wide column">              
                <div class="ui top attached tabular menu">
                  <a class="item" data-tab="review">
                    <i class="area chart icon"></i>
                    Обзор
                  </a>
                  <a class="item active" data-tab="method_code">
                    <i class="large code icon"></i>
                    Код
                  </a>
                  <a class="item" data-tab="generate_code">
                    <i class="large file code outline icon"></i>
                    Генерация
                  </a>
                </div>
                <div class="ui bottom attached tab segment" data-tab="review">
                  {include file="pages/index.page/review_tab.tpl"}
                </div>
                <div class="ui bottom attached tab segment active" data-tab="method_code">
                  {include file="pages/index.page/method_code_tab.tpl"}
                </div>
                <div class="ui bottom attached tab segment" data-tab="generate_code">
                  {include file="pages/index.page/generate_code_tab.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal windows -->
    
    {include "modals/create_image_modal.tpl"}
    {include "modals/select_current_image_modal.tpl"}
    {include "modals/create_class_modal.tpl"}
    {include "modals/create_var_modal.tpl"}
    {include "modals/create_method_modal.tpl"}
    
    {include "modals/profile.tpl"}
    {*
    {include "modals/view_images_modal.tpl"}
    *}
    
    <script type="text/javascript">
    
      var classes = [];
      var classes_for_search = [];
      
      $("a.class").each(function(index, value){
        let class_name = $(value).attr("href");
        class_name = class_name.substr(1, class_name.length);
        
        classes_for_search.push({ title: class_name });
        
        classes.push(class_name);
      });
      
      
      let app = new UIApp(classes);
      if (!app.getClassMembers()) {
        $("#vars-table").html("<h3 align='center'>Не объявлены</h3>");
        $("#methods-table").html("<h3 align='center'>Не объявлены</h3>");
      }
      
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
      
      //init segment ui
      $('.ui.search').search({
        source: classes_for_search   
      });
            
      $("#search_class").on("change", function(){
        var class_name = $("#search_class").val();
        
        if (classes.indexOf(class_name) != -1) {
          if (class_name != "") {
            app.setCurrentClass(class_name);
            app.getClassMembers();
          } else {
            alert("Class name is empty");
          }
        } else {
          alert("Error");
        }
        
      });
      
			$(".menu .item").tab();
			$('.ui.accordion').accordion();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
      
      // $(".close").alert();
      
      /*!
        Обработка событий нажатия на ссылки на панели инструментов
      */
      
      $("#createImage").on("click", function(){
        $("#createImageModal").modal('show');
      });
      
      $("#selectCurrentImage").on("click", function(){
        $("#selectCurrnetImageModal").modal('show');
      });
      
      $("#createClass").on("click", function(){
        $("#createClassModal").modal('show');
      });
     
      $("#createVar").on("click", function(){
        $("#createVarModal").modal('show');
      });
      
      $("#createMethod").on("click", function(){
        $("#createMethodModal").modal('show');
      });
      
      $("#profile").on("click", function(){
        $("#profileModal").modal('show');
      });
      
    </script>   
  </body>
</html>