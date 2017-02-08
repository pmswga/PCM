<?php
/* Smarty version 3.1.29, created on 2017-02-08 22:25:27
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589b70a7dab7e1_29318077',
  'file_dependency' => 
  array (
    '4b74acd20ce05d6c882c8ae6013da269d80ee119' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\index.tpl',
      1 => 1486581926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:windows/class_window.tpl' => 1,
    'file:windows/var_window.tpl' => 1,
    'file:windows/method_window.tpl' => 1,
    'file:windows/tools_window.tpl' => 1,
  ),
),false)) {
function content_589b70a7dab7e1_29318077 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/vt.css">
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
          <div class="row content">
            <div class="col-md-4 window">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/class_window.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="col-md-4 window">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/var_window.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="col-md-4 window">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/method_window.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row content">
            <div class="col-md-12 window">
              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/tools_window.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Скрипты -->
    <?php echo '<script'; ?>
 type="text/javascript">
            
      $(document).ready(function(){
          
        var class_consts_names = new Array();
        var class_variables_names = new Array();
        
        $("#add_const_to_table").click(function(){
        
            var const_name = $("#const_name").val();
            var const_value = $("#const_value").val();
            
            if((const_name != "") && (const_value != ""))
            {
                if($.inArray(const_name, class_consts_names) > -1) alert("Вы уже добавили константу с таким именем");
                else
                {
                    class_consts_names.push(const_name);
                    $("#consts_table").append("<tr><td> " + const_name + "<input type='hidden' name='consts_names[]' value='" +const_name + "'><input type='hidden' name='consts_values[]' value='" + const_value + " '></td><td>" + const_value + "</td></tr>");
                    $("#const_name").val("");
                    $("#const_value").val("");
                }
            }
            else if(const_name == "") alert("Введите имя константы");
            else alert("Введите значение константы");
            
        });
        
        $("#change_image_for_generate_code").change(function(){
            
            var image_name = $("#change_image_for_generate_code").val();
            
            $.ajax({
                url: "php/get_code_from_image.php",
                type: "POST",
                data: "image_name=" + image_name,
                success: function(replay){
                    $("[name='code']").html("");
                    $("[name='code']").html(replay);
                }
            });
            
        });
          
      });
        
    <?php echo '</script'; ?>
>
	</body>
</html><?php }
}
