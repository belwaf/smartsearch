<script type="text/javascript">
$(document).ready(function() {
$('.plusTR').click(function(){

	$('#NBRLigne').val(Number($('#NBRLigne').val())+1);

	var numColone=$('#NBRcolone').val();
	var numligne=$('#NBRLigne').val();
	var tab=Array(numligne,numColone);
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/divligne/"+tab
}).done(function(result) {
     $('.divcomposant').append(result);
 });
});
$('.fa-times').click(function(){
 $(this).parent().hide();
});
$('.plusTd').click(function(){
	var id='#divligne'+$(this).attr('id');

		$('#NBRcolone').val(Number($('#NBRcolone').val())+1);
		var numColone=$('#NBRcolone').val();
		var numligne=$('#NBRLigne').val();
	var tab=Array(numligne,numColone);
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/colone/"+tab
}).done(function(result) {
     $(id).append(result);
 });
});
});

</script>

<div class="auth-block" style="width:100%;">
	<i class="fa fa-times" aria-hidden="true"></i>
<div class="divcomposant">

<div class="divligne" id="divligne<?php echo $numLigne; ?>">
<div style="resize: both;" class="titreTable" id="divcolone0-0">
<select class="form-control" style=" height: 29px;">
<option>Objectif</option></select>
<div class="composantVertical" style="resize: both;">
<div style="overflow: auto;resize: both;min-height:200px;min-width:200px;">

le contunu de objectif 1 1

</div>

</div>
<button class="unlock" ><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
<button class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
<div>
<button class="plusTd" id="<?php echo $numLigne ?>"><i class="fa fa-plus-circle " aria-hidden="true"></i></button>
</div>
<button class="plusTR"><i class="fa fa-plus-circle " aria-hidden="true"></i></button>
</div>
</div>
</div></div>