
<html>
<head>

	<?php 
	 
	echo $this->Html->charset('ISO-8859-1');          
	   echo $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	 //  echo $this->Html->css('bootstrap-select');
	  // 	echo $this->Html->script('bootstrap-select'); 

		echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
       
		echo $this->Html->script('jquery.min'); 
		
		?>
	
	
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		// echo $this->Html->script('date_heure');

	?>
<?php echo $this->Html->css('jquery-te-1.4.0');?>
<?php echo $this->Html->script('jquery-te-1.4.0');?>


<script type="text/javascript">
$(document).ready(function() {
$('#imgprofile').live('click',function(){

if($('#panelProfile').is(':visible'))
{
$('#panelProfile').hide("blind");
}
else
{
  $('#panelProfile').slideDown("show");
}
});








$('#openMenuBar').live('click',function(){

if($('#MenuBar').is(':visible'))
{
$('#MenuBar').hide("show");
}
else
{
  $('#MenuBar').slideDown("slide");
}
});

/////////////////// notification


$("#notificationLink").click(function()
{
$("#notificationContainer").fadeToggle(300);
$("#messageContainer").hide();
$("#notification_count").fadeOut("slow");
return false;
});

$(document).click(function()
{
$("#notificationContainer").hide();
});

$("#notificationContainer").click(function()
{
return false;
});
$("#mesaageLink").click(function()
{
$("#messageContainer").fadeToggle(300);
$("#notificationContainer").hide();
$("#notification_count").fadeOut("slow");
return false;
});

$(document).click(function()
{
$("#messageContainer").hide();
});

$("#messageContainer").click(function()
{
return false;
});
/////////////////
$("#closeMessage").click(function()
{
	$("#messagediv").hide();
});

$("#name_profile").click(function()
{
	if($('#messagedetail').is(':visible'))
{
     $("#messagedetail").hide();
	$("#openMessageDetaile").css('bottom','0px'); 
	$("#closeMessage").show();
	$("#closeMessage").css({"position":"fixed","margin-left": "193px","margin-top":"-6px"}); 
}
else
{
	$("#messagedetail").show();
	$("#openMessageDetaile").css('bottom','270px'); 
	$("#closeMessage").hide();

var id_profile=$("#id_profile").val();
var liste=Array(id_profile,"message");
$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/messages/add/"+liste
}).done(function(result) {
     $('#messagedetail').html(result);

 });
 }
});





});
refresh();
message()
function refresh()
{	
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/actions/index/"
}).done(function(result) {
     $('#notificationContainer').html(result);
 });
}
function message()
{
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/messages/index/"
}).done(function(result) {
     $('#messageContainer').html(result);
 });
}
setInterval(function(){refresh()}, 300000);
setInterval(function(){message()}, 3000000);
</script>
</head>
<body class="blur-theme">

	<div id="container">
		<?php
if($this->Session->check("username"))
{
 $username=$this->Session->read("username");
 $tabusernam=explode('_', $username);
?>	
<div class="page-top clearfix ng-isolate-scope">
<div style="width: 200px;float: left;">
<script type="text/javascript">
          //  window.onload = date_heure('date_heure');
        </script>
<i class="fa fa-bars" aria-hidden="true" id="openMenuBar" style="font-size: x-large;margin-left: 110px;margin-top: 14px;"></i>
</div>

<div class="titregarago">
 <?php echo $this->Html->image("garago.png");?>
 </div>
  <div  style="margin-top: 15px;float: right;right: 83px;position: fixed;">					
						<?php 
						$fr='Fr,'.$this->params['controller'].','. $this->params['action'];
						$Ang='Ang,'.$this->params['controller'].','. $this->params['action'];
						if($langue=='Ang')
						 echo $this->Html->link("Français", array('controller' => 'languages', 'action' => 'language',$fr));
						 else
						  echo $this->Html->link("Anglais", array('controller' => 'languages', 'action' => 'language',$Ang));
       
						?>
			</div>
<div class="divnotification">
	<i class="fa fa-bell-o"  id="notificationLink"></i>
	<div class="notification" style="background: red;">5</div>&nbsp;&nbsp;&nbsp;
	<i class="fa fa-envelope-o" aria-hidden="true" id="mesaageLink"></i>
	<div class="notification" style="background: green;">5</div>&nbsp;&nbsp;&nbsp;
	
<div id="notificationContainer" class="notificationContainer" style="margin-left: -273px;">

</div>

<!--        PopUp message    -->
<div id="messageContainer"  class="notificationContainer" style="margin-left: -226px;">

</div>
</div>


	
		<div class="al-user-profile dropdown open">

<a uib-dropdown-toggle="" class="profile-toggle-link dropdown-toggle" aria-haspopup="true" aria-expanded="true" id="imgprofile">
	 <?php echo $this->Html->image("robert1.jpg")?></a>
		</div>
		

<div ba-panel="" ba-panel-class="with-scroll" id="panelProfile" 
style="display:none;position: fixed;top: 50px;right: 45px;">
    <div  class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur=""style="width: 237px;height: 177px;">

<div class="panel-heading clearfix">
	<?php echo $tabusernam[0]." ".$tabusernam[1] ?>
<?php //echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout') ); ?>
</div>
<div class="panel" style="height: 80px;overflow: auto;">
<ul class="top-dropdown-menu  " uib-dropdown-menu="">
	<li><a href="#/profile"><i class="fa fa-user"></i>&nbsp;Profile</a></li>
	<br>
	<li><a href=""><i class="fa fa-cog"></i>&nbsp;Settings</a></li>
</ul>
</div>
<div class="panel-heading clearfix"style="
    margin-top: -30px;">
<i class="fa fa-power-off"style="color: deepskyblue;">
<?php echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout') ); ?>
</i>
</div>
</div>
</div>



	

</div>
<div class="al-sidebar actions" id="MenuBar">	
<ul>
	<?php 
	if($this->Session->check("role"))
if($this->Session->read("role")=="admin")
{
	?>
<li class="form-control"><?php echo $this->Html->link(__('Sector'), array('controller'=>'sectors')); ?></li>
<li class="form-control"><?php echo $this->Html->link(__('Category'), array('controller'=>'categories')); ?></li>
<li class="form-control"><?php echo $this->Html->link(__('Language'), array('controller'=>'languages')); ?></li>
<li class="form-control"><?php echo $this->Html->link(__('Customers'), array('controller'=>'customers')); ?></li>
<?php }?>
<li class="form-control"><?php echo $this->Html->link(__('Search'), array('controller'=>'pages')); ?></li>
<li class="form-control"><?php echo $this->Html->link(__('Document'), array('controller'=>'documents','action'=>'add')); ?></li>
<li class="form-control"><?php echo $this->Html->link(__('Componets'),
 array('controller'=>'composants','action'=>'index')); ?></li>
</ul>

</div>

<?php } ?>

<div class="col-md-12" style="display:none" id="messagediv" >
<div ba-panel="" ba-panel-class="with-scroll" id="openMessageDetaile" 
style="position: fixed;bottom: 0px;right: 15px;cursor: pointer;">
    <div  class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur=""style="width: 237px;height: 47px;bottom: -22px;">
<div class="panel-heading clearfix"><input type="hidden" id="id_profile" value="4">
  <span  class="fa fa-user-o" aria-hidden="true"></span>
 <i id="name_profile"></i>
<i class="fa fa-times"  aria-hidden="true" style="position: fixed;margin-left: 93px;margin-top: 6px;" id="closeMessage"></i>
</div>
</div></div>
</div>




<div class="col-md-12">
<div ba-panel="" ba-panel-class="with-scroll" id="messagedetail" 
style="display:none;position: fixed;bottom: -20px;right: 15px;">
   
</div>
</div>



<div id="content" class="content">
	
	

<?php echo $this->fetch('content'); ?>
		</div>
		
	</div>
	
</body>
</html>
