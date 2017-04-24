<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Class Manager</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/tabulation.js"></script>
		<link rel="stylesheet" type="text/css" href="css/semantic/dist/semantic.min.css">
		<script src="css/semantic/dist/semantic.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
      <div class="row">
				<div class="col-md-12">
					{include file='windows/menu.tpl'}
				</div>
			</div>
			<div class="row" style="padding: 15px;">
				<div class="col-md-3">
					{include file='windows/classes.tpl'}
				</div>
				<div class="col-md-5">
					{include file='windows/tools.tpl'}
				</div>
				<div class="col-md-4">
					{include file='windows/methods_vars.tpl'}
				</div>
			</div>
    </div>
		
		<script type="text/javascript">
			
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
			
			
			
			$("#hierarchia a").click(function(){
				
				var class_name = this.getAttribute("href");
				class_name = class_name.substr(1, class_name.length);
				
				if (class_name) {
				
					$.ajax({
						url: "php/get_methods.php",
						type: "POST",
						data: "className=" + class_name,
						success: function(replay) {
							$("#classMethods").html("");
							$("#classMethods").html(replay);
						}
					});
					
					$.ajax({
						url: "php/get_vars.php",
						type: "POST",
						data: "className=" + class_name,
						success: function(replay) {
							$("#classVarsConsts").html("");
							$("#classVarsConsts").html(replay);
						}
					});
				
				}
				
			});
			
			
			// Код для интерактивного тестирования
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
			
		</script>
		
		
	</body>
</html>
