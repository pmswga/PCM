<?php
/* Smarty version 3.1.29, created on 2017-09-04 23:25:15
  from "C:\OpenServer\domains\PCM\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59adb6ab4cd465_43029521',
  'file_dependency' => 
  array (
    'd69cf8251a6d6cbc6c3e44d04c265aded0032e2a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl\\index.tpl',
      1 => 1504552935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/menu.tpl' => 1,
    'file:blocks/status_bar.tpl' => 1,
    'file:blocks/tool_bar.tpl' => 1,
    'file:modals/create_image_modal.tpl' => 1,
    'file:modals/select_current_image_modal.tpl' => 1,
    'file:modals/create_class_modal.tpl' => 1,
    'file:modals/create_var_modal.tpl' => 1,
    'file:modals/create_method_modal.tpl' => 1,
    'file:modals/profile.tpl' => 1,
  ),
  'tpl_function' => 
  array (
    'menu' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'C:\\OpenServer\\domains\\PCM\\templates\\tpl_c\\d69cf8251a6d6cbc6c3e44d04c265aded0032e2a_0.file.index.tpl.php',
      'uid' => 'd69cf8251a6d6cbc6c3e44d04c265aded0032e2a',
      'call_name' => 'smarty_template_function_menu_1657359adb6ab415ab3_08837882',
    ),
  ),
),false)) {
function content_59adb6ab4cd465_43029521 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php if ($_smarty_tpl->tpl_vars['currentImage']->value != NULL) {?>      
        <?php echo $_smarty_tpl->tpl_vars['currentImage']->value;?>
 | Workspace
      <?php } else { ?>
        IDE Smart PHP
      <?php }?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="css/semantic/semantic.js"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="js/uiapp.js"><?php echo '</script'; ?>
>
    
    <!-- Init EditArea -->
    <?php echo '<script'; ?>
 type="text/javascript" src="editarea/edit_area/edit_area_full.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/javascript">
      /*
       editAreaLoader.init({ 
        id: "methodCode" 
        ,start_highlight: true 
        ,allow_resize: "no" 
        ,min_height: 650
        ,allow_toggle: false
        ,word_wrap: true 
        ,language: "ru" 
        ,syntax: "php" 
       });
*/       
       /*
       editAreaLoader.init({ 
        id: "generatedCode" 
        ,start_highlight: true 
        ,allow_resize: "both"
        ,min_height: 650
        ,allow_toggle: false
        ,word_wrap: true 
        ,language: "ru" 
        ,syntax: "php"
        ,is_editable: false
       }); 
    */
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:blocks/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="content" class="ui divided grid">
      <div class="row">
        <div class="four wide column">
          <div class="row">
            <div class="sixteen wide column">
              <?php if ($_smarty_tpl->tpl_vars['msgs']->value != NULL) {?>              
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:blocks/status_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              <?php }?>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="sixteen wide column">
              <fieldset>
                <legend><h1>Иерархия классов</h1></legend>
                
                <?php if ($_smarty_tpl->tpl_vars['classHierarchia']->value != NULL) {?>
                  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['classHierarchia']->value), true);?>

                <?php } else { ?>
                  Классы не объявлены
                <?php }?>
              </fieldset>          
            </div>
          </div>
        </div>
        <div class="twelve wide column">
          <div class="ui divided grid">
            <div class="row">
              <div class="sixteen wide column">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:blocks/tool_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                  <div class="ui grid">
                    <div class="row">
                      <div class="sixteen wide column">                      
                        <div class="actions" id="profile_tool_bar">
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Классов
                            </div>
                            <a class="ui basic red left pointing label">
                              <?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfClasses']->value)===null||$tmp==='' ? 0 : $tmp);?>

                            </a>
                          </div>
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Методов
                            </div>
                            <a class="ui basic red left pointing label">
                              <?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfMethods']->value)===null||$tmp==='' ? 0 : $tmp);?>

                            </a>
                          </div>
                          <div class="ui labeled button" tabindex="0">
                            <div class="ui button">
                              Свойств
                            </div>
                            <a class="ui basic red left pointing label">
                              <?php echo (($tmp = @$_smarty_tpl->tpl_vars['countOfVars']->value)===null||$tmp==='' ? 0 : $tmp);?>

                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="sixteen wide column">
                      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui bottom attached tab segment active" data-tab="method_code">
                  <div class="ui internally celled grid">
                    <div class="row">
                      <div class="ten wide column">
                        <form name="editCodeMethodForm" method="POST" class="ui form">
                          <div class="field">
                            <textarea rows="15" name="src" onkeydown="insertTab(this, event);" id="methodCode"></textarea>
                        <!-- onkeydown="insertTab(this, event);" -->
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
                </div>
                <div class="ui bottom attached tab segment" data-tab="generate_code">
                  <div class="ui grid">
                    <?php if ($_smarty_tpl->tpl_vars['image']->value != NULL) {?>
                      <div class="row">
                        <div class="six wide column">
                          <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_Variable($_smarty_tpl->tpl_vars['image']->value->getClasses(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'classes', 0);?>
                          <?php if ($_smarty_tpl->tpl_vars['classes']->value != NULL) {?>
                            <table class="ui table striped">
                              <thead>                          
                                <tr>
                                  <th>Название класса</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
$_from = $_smarty_tpl->tpl_vars['classes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_class_1_saved_item = isset($_smarty_tpl->tpl_vars['class']) ? $_smarty_tpl->tpl_vars['class'] : false;
$_smarty_tpl->tpl_vars['class'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['class']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->_loop = true;
$__foreach_class_1_saved_local_item = $_smarty_tpl->tpl_vars['class'];
?>
                                    <tr>
                                      <td><?php echo $_smarty_tpl->tpl_vars['class']->value->getClassName();?>
</td>
                                    </tr>
                                  <?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_local_item;
}
if ($__foreach_class_1_saved_item) {
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved_item;
}
?>
                              </tbody>
                            </table>
                          <?php } else { ?>
                            <h3>В образе не найдены классы</h3>
                          <?php }?>
                        </div>
                        <div class="ten wide column">
                          <div class="ui internally grid">
                            <div class="row">
                              <div class="sixteen wide column">
                                <form name="generateForm" method="POST" class="ui form">
                                  <div class="field">
                                    <input type="submit" name="generateImageButton" value="Сгенерировать" class="ui button">
                                  </div>
                                  <div class="field">
                                    <textarea rows="50" id="generatedCode" width="100%"><?php echo $_smarty_tpl->tpl_vars['image']->value;?>
</textarea>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> 
                    <?php } else { ?>
                      <div class="row">
                        <div class="six wide column">
                          <h2>Для начала необходимо создать образ</h2>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal windows -->
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_image_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/select_current_image_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_class_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_var_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_method_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    
    
    <!-- Modals -->
    
    <?php echo '<script'; ?>
 type="text/javascript">
    
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
        $("#vars-table").html("<h3 align='center'>Empty</h3>");
        $("#methods-table").html("<h3 align='center'>Empty</h3>");
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
          }
        }
        
      });
      
			$(".menu .item").tab();
			$('.ui.accordion').accordion();
      
      $('.message .close').on('click', function() {
          $(this).closest('.message').transition('fade');
      });
      
      
      // $(".close").alert();
      
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
      
    <?php echo '</script'; ?>
>   
  </body>
</html><?php }
/* smarty_template_function_menu_1657359adb6ab415ab3_08837882 */
if (!function_exists('smarty_template_function_menu_1657359adb6ab415ab3_08837882')) {
function smarty_template_function_menu_1657359adb6ab415ab3_08837882($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
                  <ul class="ui list" id="hierarchia">
                    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_entry_0_saved_item = isset($_smarty_tpl->tpl_vars['entry']) ? $_smarty_tpl->tpl_vars['entry'] : false;
$_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['entry']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
$__foreach_entry_0_saved_local_item = $_smarty_tpl->tpl_vars['entry'];
?>
                      <li class="item">
                        <i class="folder icon"></i>
                        <div class="content">
                          <div class="header"><a href="#<?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
" class="class"><?php echo $_smarty_tpl->tpl_vars['entry']->value['supclass']->getClassName();?>
</a></div>
                          <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value['subclass'])) {?>
                            <ul class="list">
                              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value["subclass"]), true);?>

                            </ul>
                          <?php }?>
                        </div>
                      </li>
                    <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_local_item;
}
if ($__foreach_entry_0_saved_item) {
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved_item;
}
?>
                  </ul>
                <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_1657359adb6ab415ab3_08837882 */
}
