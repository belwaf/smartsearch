<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
    <meta charset="utf-8">

	

	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
	
	<?php 
      echo $this->Html->css('evol-colorpicker');
      echo $this->Html->script('evol-colorpicker'); 
	?>
</head>

<body>

<div id="cpb" class="demoPanel" style="width:170px">
	<input id="cp1"/><br/> 
	<div id="tests" class="demo-links">
	<a href="#" id="clear">Clear</a>
	<a href="#" id="destroy1">Destroy</a>
	</div>
</div>



</div>

<script>

$(document).ready(function(){
	$('#cp1').colorpicker({
		color:'#8db3e2',
		initialHistory: ['#ff0000','#000000','red', 'purple']
	})
		.on('change.color', function(evt, color){
			$('#cpb').css('background-color',color);
		})
		.on('mouseover.color', function(evt, color){
            if(color){
                $('#cpb').css('background-color',color);
            }
		});
	$('#clear').on('click', function(){
		var v=$('#cp1').colorpicker("clear") ;
	});
	$('#destroy1').on('click', function(){
		var v=$('#cp1').colorpicker("destroy") ;
	});
	

});

</script>
</body>

</html>