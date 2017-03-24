 <script>
  $('.jqte-test').jqte();
  
  // settings of status
  var jqteStatus = true;
  $(".status").click(function()
  { 
    jqteStatus = jqteStatus ? false : true;
    $('.jqte-test').jqte({"status" : jqteStatus})
  });
</script>
<script type="text/javascript">
$(document).ready(function() {

$('.fa-pencil').click(function(){
	var liste=$(this).attr('attr');
	var tab=liste.split(',');
	$("#"+tab[0]+'-'+tab[1]+'-'+tab[2]).addClass('jqte-test');
	 $("#"+tab[0]+'-'+tab[1]+'-'+tab[2]).attr("disabled",false);
	 $("#"+tab[0]+'-'+tab[1]+'-'+tab[2]).select()
	
});
$('.fa-times-circle-o').click(function(){
	var liste=$(this).attr('attr');
	$(this).parent().parent().remove();
	 $.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/delete/"+liste
});

});

$('textarea').focusout(function(){
	$(this).attr("disabled",true);
	var liste=Array(($(this).attr('id')).split('-'),$(this).val());
	 $.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/editExemple/"+liste
});

});

	});
</script>
<?php for ($i=0; $i <count($TableTails[$index[0]][$index[1]]['data']) ; $i++) { 
	 ?>
<div class="exempleObj jqte-test">
	
<div style="min-height: 28px;">
	
	<?php echo trim($TableTails[$index[0]][$index[1]]['data'][$i]); ?>

</div>

</div>
<?php }?>