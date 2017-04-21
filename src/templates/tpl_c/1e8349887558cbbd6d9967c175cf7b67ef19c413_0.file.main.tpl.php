<?php
/* Smarty version 3.1.29, created on 2017-04-21 20:19:33
  from "C:\OpenServer\domains\pcm.php\src\templates\tpl\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58fa3f258212a1_70294172',
  'file_dependency' => 
  array (
    '1e8349887558cbbd6d9967c175cf7b67ef19c413' => 
    array (
      0 => 'C:\\OpenServer\\domains\\pcm.php\\src\\templates\\tpl\\main.tpl',
      1 => 1492794969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:windows/menu.tpl' => 1,
    'file:windows/classes.tpl' => 1,
    'file:windows/tools.tpl' => 1,
    'file:windows/methods_vars.tpl' => 1,
  ),
),false)) {
function content_58fa3f258212a1_70294172 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="js/tabulation.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" type="text/css" href="css/semantic/dist/semantic.min.css">
		<?php echo '<script'; ?>
 src="css/semantic/dist/semantic.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="container-fluid">
      <div class="row">
				<div class="col-md-12">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
			<div class="row" style="padding: 15px;">
				<div class="col-md-3">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/classes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
				<div class="col-md-5">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
				<div class="col-md-4">
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:windows/methods_vars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
    </div>
		
		<?php echo '<script'; ?>
 type="text/javascript">
			
			$(".menu .item").tab();
			
			$('.ui.accordion').accordion();
			
			$('select.dropdown').dropdown();
			
			$('.message .close').on('click', function() {
				$(this).closest('.item').transition('fade');
			});
			
			class UI 
			{
				constructor()
				{
					if (localStorage) {
						localStorage['title'] = "PCM";
						localStorage.clear();
						
						for (var i = 0; i < localStorage.length; i++) {
							var key = localStorage.key(i);
							alert(key);
							this.setAccordionState(key, localStorage[key]);
							console.log(key);
						}
						
					}
				}
				
				/*!
					
					@param state [active, ""]
				
				*/
				
				saveAccordionState(name, state)
				{
					localStorage[name] = state;
				}
				
				setAccordionState(name, state)
				{
					if (state) {
						$(name).addClass("active");
					} else {
						$(name).removeClass("active");
					}
				}
				
			}
			
			var ui = new UI;
			
			var isClick = false;
			
			
			$(".ui.accordion").click(function (accordion) {
				
				<!-- if (isClick) { -->
					<!-- ui.saveAccordionState($(accordion), true); -->
					
					<!-- isClick = false; -->
				<!-- } else { -->
					<!-- ui.saveAccordionState($(accordion), false); -->
					
					<!-- isClick = true; -->
				<!-- } -->
				
				
			});
			
			
			
			$("[name='test_code']").change(function(){
				
				var code = $("[name='test_code']").val();
				
				if (code != "") {
				
					$.ajax({
						url: "php/do_it.php",
						type: "POST",
						data: "code=" + code,
						success: function(replay) {
							$("#result_of_code").html("");
							$("#result_of_code").html(replay);
						}
					});
				
				}
				
			});
				
				
			
		<?php echo '</script'; ?>
>
		
		
	</body>
</html>
<?php }
}
