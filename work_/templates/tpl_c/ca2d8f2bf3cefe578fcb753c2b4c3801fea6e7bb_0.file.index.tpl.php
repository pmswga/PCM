<?php
/* Smarty version 3.1.29, created on 2017-08-12 22:27:34
  from "C:\OpenServer\domains\PCM\work_\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_598f56a60c7811_79212038',
  'file_dependency' => 
  array (
    'ca2d8f2bf3cefe578fcb753c2b4c3801fea6e7bb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PCM\\work_\\templates\\tpl\\index.tpl',
      1 => 1502566053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blocks/menu.tpl' => 1,
    'file:modals/create_class_modal.tpl' => 1,
    'file:modals/create_image_modal.tpl' => 1,
    'file:modals/view_images_modal.tpl' => 1,
    'file:modals/select_current_image_modal.tpl' => 1,
    'file:modals/create_var_modal.tpl' => 1,
    'file:modals/create_method_modal.tpl' => 1,
  ),
),false)) {
function content_598f56a60c7811_79212038 ($_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style rel="stylesheet">
      
      table tr th {
        text-align: center;
      }
      
    </style>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:blocks/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <fieldset>
                <legend>Иерархия классов</legend>
                <?php if ($_smarty_tpl->tpl_vars['classHierarchia']->value != NULL) {?>
                  <div id="hierarchia" class="ui bulleted list">
                    <?php echo $_smarty_tpl->tpl_vars['classHierarchia']->value;?>

                  </div>
                <?php } else { ?>
                  <h3 align="center">Классы не объявлены</h3>
                <?php }?>
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
    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_class_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_image_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/view_images_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/select_current_image_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_var_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modals/create_method_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <!-- Status bar -->
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value != NULL) {?>
      <div id="status_bar">
        <?php
$_from = $_smarty_tpl->tpl_vars['msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_msg_0_saved_item = isset($_smarty_tpl->tpl_vars['msg']) ? $_smarty_tpl->tpl_vars['msg'] : false;
$_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['msg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
$__foreach_msg_0_saved_local_item = $_smarty_tpl->tpl_vars['msg'];
?>
          <div class="message bg-<?php echo $_smarty_tpl->tpl_vars['msg']->value['type'];?>
"
            data-toggle="popover" 
            data-placement="top"                  
            data-html="true"
            <?php if ($_smarty_tpl->tpl_vars['msg']->value['type'] == "success") {?>
              title="Уведомление"
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "info") {?>
              title="Информация"
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "warning") {?>
              title="Предупреждение"
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "danger") {?>
              title="Ошибка"
            <?php }?>
            data-content="<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['msg']->value['type'] == "success") {?>
              <a href="#">S</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "info") {?>
              <a href="#">I</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "warning") {?>
              <a href="#">W</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['type'] == "danger") {?>
              <a href="#">D</a>
            <?php }?>
          </div>
        <?php
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_local_item;
}
if ($__foreach_msg_0_saved_item) {
$_smarty_tpl->tpl_vars['msg'] = $__foreach_msg_0_saved_item;
}
?>
      </div>
    <?php }?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
    
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
      
    <?php echo '</script'; ?>
>
    
  </body>
</html><?php }
}
