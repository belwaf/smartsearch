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
<script>

$(document).ready(function(){
  var color;
 $('.cp1').colorpicker({
  })
    .on('change.color', function(evt, color){
        colors=$(this).val();
        var index = $(this).attr('id');
       colors=colors.substring(1);
       var coordonners=$("#NBRCOLONE").val();
       var liste=Array(index,colors,coordonners);
         $.ajax({
         type: "POST",
         url:<?php echo $this->webroot ; ?>+"/plans/colors/"+liste
      })
         $("#refersh").show();
    })
    .on('mouseover.color', function(evt, color){
            if(color){
                $(this).parent().parent().css('background-color',color);
                 $(this).parent().css('background-color',color);

            }
    });
 RowSorter('table', {
    handler: 'td.sorter',
    stickFirstRow : true,
    stickLastRow  : false,
    onDragStart: function(tbody, row, index){},
    onDrop: function(tbody, row, new_index, old_index){
    alert(tbody+"-"+row+"-"+"-"+new_index+"-"+old_index) ;}

}); 


 $('#delete').click(function(){
$("#example").colResizable({
    liveDrag:true, 
      gripInnerHtml:"<div class='grip'></div>", 
      draggingClass:"dragging", 
            resizeMode:'fit'
        });
 });
  function callback() {
      setTimeout(function() {
        $( ".notificationdiv:visible" ).removeAttr( "style" ).fadeOut();
      }, 1000 );
    };
  $('.composantVertical').dblclick(function(){
var coordonners=$(this).attr('id');
var type=$("#"+coordonners.split(',')[1]).val();
var liste=Array(coordonners,type);
if(type=="")
{
$(".notificationdiv").html("<div><a><i class='fa fa-exclamation-triangle' aria-hidden='true'></i></a>Select Type Component SVP!!</div>");
$(".notificationdiv").show('drop',null,500,callback);
}else{
$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/composant/"+liste
}).done(function(result) {
     $("#detail").html(result);
     $("#detail").show();
 });
}
 });
$('.input2').focus(function(){
$(this).val("");
});
$('.input2').focusout(function(){
var color=$(this).val();
var colone=$(this).attr('id');
var coordonners=$("#NBRCOLONE").val();
var liste=Array(colone,color,coordonners);
$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/typeCom/"+liste
})
$("#refersh").show();
 });

$('.dis').click(function(){
  var display=$(this).attr('id');
var coordonners=$("#NBRCOLONE").val();
liste=Array(display,coordonners);
$.ajax({
  type: "POST",
  url:<?php echo $this->webroot ; ?>+"/plans/displaycol/"+liste
})
$("#refersh").show();
 });

});

</script>
<input type="hidden" value="<?php echo $coordonners[0].','.$coordonners[1]; ?>" id="NBRCOLONE">
<style>


table.sorting-table {cursor: move;}
table tr.sorting-row td {background-color: #8b8;}
table td.sorter {background-color:rgb(71, 76, 68); width: 5px; cursor: move;}
</style>
<table border="2"id="example"  class="display " cellspacing="0" style="width: 100%;max-width:100%;color: black;background: rgba(240, 248, 255, 0.86);border: 3px solid;border-color: #e6dbea;">
        <thead>
            <tr>
              <th class="sorter"></th>
              <?php for ($i=1; $i <$coordonners[1]+1 ; $i++) { 
               ?>
                <th >     
                   <?php if($TableTails[0][$i]['display']=="none"){ ?>
                   <i class="fa fa-eye dis" style="width: 6px;float: right;margin-right: 7px;" aria-hidden="true" id="<?php echo $i ?>.block"></i>
                  <?php } else { ?>
                   <i class="fa fa-eye-slash dis" style="width: 6px;float: right;margin-right: 7px;" aria-hidden="true" id="<?php echo $i ?>.none"></i>
                   <input class="cp1" id="<?php echo '0,'.$i; ?>" type="hidden" />
                   <?php }?>
                </th>
               <?php }?>
            </tr>
            <tr id="typecomposante">
              <td class="sorter"> </td>
              <?php for ($i=0; $i <$coordonners[1] ; $i++) { 
               ?>
                <td bgcolor="<?php  echo $TableTails[0][$i+1]['color'];?>"> 
   <input list="query" style="background-color: rgba(0,0,0,0);display:<?php echo $TableTails[0][$i+1]['display']?>;"placeholder='Select type component' class="form-control input2" id="<?php echo $i+1;?>" 
   value="<?php  echo explode('-',$TableTails[1][$i+1]['type'])[0];?>"
   />
              </td>
               <?php }?>
            </tr>
        </thead>
        <tbody>
<?php for ($i=2; $i <$coordonners[0]+1 ; $i++) { ?>
<tr>
  <td class="sorter">
    <input class="cp1" id="<?php echo $i.',0'; ?>" type="hidden"/> 
  </td>
  <?php for ($j=1; $j <$coordonners[1]+1 ; $j++) {
   $index=($coordonners[1]+1)*$i+$j;?>
  <td bgcolor="<?php  echo $TableTails[$i][$j]['color'];?>" >
<div class="composantVertical" style="min-height:50px;min-width:50px;display:<?php echo $TableTails[0][$j]['display'] ?>"id="<?php echo $i.','.$j ?>">
  <ul style="
    float: left;
    padding: 0px;
    width: 100%;
    margin-left: -1px;
    height: 100%;
    
">
 <?php 
for ($C=0; $C <count($TableTails[$i][$j]['data']); $C++) { ?>
<li style="
    list-style-type: none;
    border: 1px solid;
    border-color: #e2d0e2;
    border-left: none;
    border-right: none;
    border-top: none;
">
  <?php echo $TableTails[$i][$j]['data'][$C];  ?>
</li>
<?php } ?>
</ul>
</div>
<div style="float:right;right: 5px;position: relative;bottom: 2px;display:<?php echo $TableTails[0][$j]['display'] ?>" >
<input class="cp1" type="hidden" id="<?php echo $i.','.$j ?>"/>
<i class="fa fa-eye open" aria-hidden="true" id="<?php echo $i.','.$j ?>"></i>
</div>
</td>
 <?php }?>
  </tr>
  <?php } ?>
        </tbody>  
    </table>


    <div   style="display:none;position: absolute;top: 50px;left: 25%;" id="detail">
        
</div>
