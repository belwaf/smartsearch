
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
  <?php 
      echo $this->Html->css('evol-colorpicker');
      echo $this->Html->script('evol-colorpicker'); 
  ?>
   <?php
echo $this->Html->script('RowSorter');

     ?>
 <?php 
 echo $this->Html->script('colResizable-1.6');
 ?>
<script type="text/javascript">
$(document).ready(function() {
  setInterval(function(){refresh()}, 500);
  mise("ligne");

function refresh(){
   if($("#refersh").is(':visible'))
  {
  var coordonners=$("#NBRCOLONE").val();
 $.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/tableau/"+coordonners
}).done(function(result) {
     $("#table_id").html(result);
 });
 $("#refersh").hide();
}
}

//   $(".fa-refresh").click(function (){
// refresh();
//   });

  function mise(type)
  { 
    ligne=-1;
      colone=-1;
 $('#example').find('tr').each(function(il,el) {
ligne++;
 });
  $('#example').find('th').each(function(il,el) {
colone++;
 });
  if(type=="colone")
  {
    colone+=1;
  }
    
  else{
    ligne+=1;
  }
    
  var coordonner=Array(ligne,colone);
    $.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/tableau/"+coordonner
}).done(function(result) {
     $("#table_id").html(result);
 });

  }
 $('#add').click(function(){
  mise("ligne");
  });
 $('#btnAddCol').click(function(){
  mise("colone");
  });
 
mise("ligne");

});
</script>
<div style="display:nones "class="refreshdiv"  id="refersh">
  <div>
    <?php echo $this->Html->image("LoaderIcon.gif");?>
</div>
</div>
<div style="display:none "class="notificationdiv"  id="notification">
  <div>
<i class="fa fa-refresh" aria-hidden="true">Refresh</i>
</div>
</div>
<div style="background: #ffffff;height:90%;padding-left: 100px;padding-right: 100px;padding-bottom: 0px;padding-top: 50px;">
 
    <div class="panel-heading clearfix" style="height: 100px;margin-top: 0px;
    background: #ffffff;">
<div class="row">
<div class="divPrice" >
 Gold</div>

<div class="divTitre">
<h2 style="text-align: center;">
<input type="text" class="inputplan" value="" placeholder="Title" style="width:100%">
</h2>
<input type="hidden" id="NBRLigne" value="0">
<input type="hidden" id="NBRcolone" value="1">
</div>
<div class="divDate">
	<input type="text" class="inputplan" value="<?php echo date("F j, Y, g:i a"); ?>" placeholder="<?php echo date("F j, Y, g:i a"); ?>"></div>
</div>
	<div class="row">
<div class="divLogo">
	<button style="background: none;border: none;">
		<img src="/smartsearch/img/robert1.jpg" width="70px" height="70px">
	</button>
	
</div>
<div class="divFiltrage">
	   <div class="form-group">
	   	<input type="text"  placeholder="<?php echo __('Filtrage');?>">
                                
            </div>
</div>
</div>
    </div></br>
 <div style="width: 38px;margin-left: -16px;position: absolute;">
   <i id="delete" class="fa fa-window-close" aria-hidden="true" style="color:#000000;font-size:18px"></i> 
 
 <i class="fa fa-plus-square" style="color:#000000;font-size:18px" aria-hidden="true" id="btnAddCol"></i>
  <i class="fa fa-plus-square" style="color:#000000;font-size:18px" aria-hidden="true" id="add"></i>
  </div>

<div style="display:none; margin-top:20px">
 <input type="hidden"  class='colors'/>
</div>
<div id="table_id"style="color: navy;margin-top: 17px;">
<table id="example"  class="display" cellspacing="0" style="width: 100%;max-width:100%;color: black;">
        <thead>
            <tr id="typecomposante">
              <th>move</th>
                <th> 
   <input list="query" placeholder='Select type component' class="form-control input2" id="input"> 
 
               </th>
                  <th> 
   <input list="query" placeholder='Select type component' class="input2 form-control"id="input"> 

               </th>
                  <th> 
   <input list="query" placeholder='Select type component' class="input2 form-control"id="input"> 

               </th>
                  <th> 
   <input list="query" placeholder='Select type component' class="input2 form-control"id="input"> 
 
               </th>
                
            </tr>
        </thead>

    
    </table>
   </div>
</div>
</div>


 <datalist id="query">
  <?php foreach ($types as $type) {
	?>
<option value="<?php echo $type['TypeComponent']['description'] ?>-<?php echo ''.$type['TypeComponent']['id']; ?>">
	</option>
<?php
} ?>
   </datalist>






   