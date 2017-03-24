<script type="text/javascript">

$('.delete').click(function(){
$('#dialog-confirm').show();
var x=$(this).parent();
$('#deleteParrent').click(function(){
 x.remove();
 $(this).parent().hide();
});
$('#AnnulerParrent').click(function(){
 $(this).parent().hide();
});
});
$('.fa-times').click(function(){
 $(this).parent().hide();
});

$('.edit').click(function(){
$('#dialog-edit').show();
var x=$(this).attr('id');
var y='#input'+x;
var type=$(y).val();
if(!type)
{
	alert("non empty");
}
$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/editcoponent/"
}).done(function(result) {
     $('#dialog-edit').append(result);
 });
});
</script>

<input type="hidden" value="<?php  echo $tab[0].'-'.$tab[1];?>" id="idcolone">
<div style="resize: both;" class="titreTable" id="colone<?php echo $tab[0].'-'.$tab[1]; ?>">
<input list="query" class="form-control"
 style=" height: 29px;" id="input<?php echo $tab[0].'-'.$tab[1]; ?>">
<div class="composantVertical" style="resize: both;">
<div style="overflow: auto;resize: both;min-height:200px;min-width:200px;">
le contunu de objectif 1 1
</div>
</div>
<button class="delete" id="0-0"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button>
<button class="unlock"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
<button class="edit" id="<?php echo $tab[0].'-'.$tab[1]; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
</div>

<div id="dialog-confirm" title="Empty the recycle bin?" class="dialogue">
	<i class="fa fa-times" aria-hidden="true"></i>
  <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?
  </p>
  <button class="form-control" style="width: 108px;float: left;" id="deleteParrent"><?php echo __("Delete");?></button><button  class="form-control" style="width: 108px;float: right;" id="AnnulerParrent"><?php echo __("Cancel");?></button>
</div>
<div id="dialog-edit" class="dialogue_edit">
	<i class="fa fa-times" aria-hidden="true"></i>
  
  <button class="form-control" style="width: 108px;float: left;" id="deleteParrent"><?php echo __("Delete");?></button><button  class="form-control" style="width: 108px;float: right;" id="AnnulerParrent"><?php echo __("Cancel");?></button>
</div>
 <datalist id="query">
  <?php foreach ($types as $type) {
	?>
<option value="<?php echo $type['TypeComponent']['id'] ?>:<?php echo $type['TypeComponent']['description'] ?>">
	</option>
<?php
} ?>
   </datalist>
