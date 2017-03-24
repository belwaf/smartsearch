
<script type="text/javascript">
$(document).ready(function() {
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/exemple/"
})
// $('.plusTR').click(function(){
// 	$('#NBRLigne').val(Number($('#NBRLigne').val())+1);
// 	var numColone=$('#NBRcolone').val();
// 	var numligne=$('#NBRLigne').val();
// 	var tab=Array(numligne,numColone);
// 	$.ajax({
//   type: "POST",
//   url:<?php echo $this->webroot ; ?>+"/plans/divligne/"+tab
// }).done(function(result) {
//      $('.divcomposant').append(result);
//  });
// });
$('.fa-times').click(function(){
 $(this).parent().hide();
  $("#refersh").show();

});
$('.inputObjectif').focus(function(){
	$(this).select();
})
$('.inputObjectif').focusout(function(){
	var tab=$(this).val();
	var id="#div"+$(this).attr('id');
	var ligne=$("#ligne").val();
    var liste=Array(ligne,$(this).attr('id'),tab); 
	$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/exemple/"+liste
}).done(function(result) {
     $(id).html(result);
 });
})
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
     $(id).html(result);
 });
});
});
</script>
<?php echo $this->Html->css('w3'); ?>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("divslider");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<div class="auth-block" style="width:100%;">
	<i class="fa fa-times" aria-hidden="true"></i>
<div class="divcomposant">

<div class="divligne" >


<input type="hidden" value="<?php echo $coordonner[0]; ?>" id="ligne">
<div style="resize: both;" class="titreTable" id="divcolone0-0">
	<div class="divTitreComposant"><?php echo $coordonner[2]; ?></div>
<input  list="<?php echo $TableTails[1][$coordonner[1]]['type'] ?>" class="inputObjectif" id="<?php echo $coordonner[1]; ?>">
<div class="composantVertical" style="resize: both;">
<div id="div<?php echo $coordonner[1] ?>"class="jqte-test">
</div>
</div>
<button class="unlock" ><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
<button class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
<div>
</div>
</div>
<i class="fa fa-chevron-circle-left flech" aria-hidden="true" onclick="plusDivs(-1)"></i>


<?php for ($i=1; $i <count($TableTails[1]) ; $i++) { 
		$com=explode('-',$TableTails[1][$i]['type']);
if($i!=$coordonner[1]){

?>

<div style="resize: both;display:none; width:298px" class="titreTable divslider" >
	<div class="divTitreComposant"><?php echo $com[0]; ?></div>
<input  list="<?php echo $TableTails[1][$i]['type'] ?>" class="inputObjectif" id="<?php echo $i; ?>">
<div class="composantVertical jqte-test" >
<div id="div<?php echo $i ?>" >

</div>
</div>
<button class="unlock" ><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
<button class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
<div>
</div>
</div>
<?php
 } ?>
<datalist id="<?php echo $TableTails[1][$i]['type'] ?>">

  <?php foreach ($composants as $composant) 
if($com[1]==$composant['Composant']['type_id'])
{

	?>
<option value="<?php echo $composant['Composant']['titre'] ?>"><?php echo $composant['Composant']['description'] ?>
	</option>
<?php
} ?>
   </datalist>

<?php
 } ?>



<i class="fa fa-chevron-circle-right flech" aria-hidden="true" onclick="plusDivs(1)"></i>



</div>
</div>




</div>

 