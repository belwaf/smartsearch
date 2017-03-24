<?php
App::uses('AppController', 'Controller');
/**
 * Plans Controller
 *
 * @property Plan $Plan
 */
class PlansController extends AppController {

public function composant($liste=null)
{	$this->loadModel("Composant");
$coordonner=explode(',',$liste);
$type=explode(',',$coordonner[2]);
$composants=$this->Composant->find('all');
$TableTails=$this->Session->read("TableTail");
	$this->exemple($coordonner[0].','.$coordonner[1]);
	$this->set(compact('composants','TableTails','coordonner'));
}
public function colone($numLigne=null)
{
	$this->loadModel('TypeComponent');
	$types=$this->TypeComponent->find('all');
$tab=explode(',',$numLigne); 
	$this->set(compact('tab','types'));
}
public function divligne($numLigne=null)
{
	$tab=explode(',',$numLigne); 

	$this->set(compact('tab'));
}
public function editcoponent($liste=null)
{

}
public function exemple($liste=null)
{
	$index=explode(',',$liste);
	if(count($index)==3){
	$TableTails=$this->Session->read("TableTail");
	$i=count($TableTails[$index[0]][$index[1]]['data']);
     $this->Session->write('TableTail.'.$index[0].'.'.$index[1].'.data.'.$i,str_replace('\t',' ',trim($index[2])));
       }
$TableTails=$this->Session->read("TableTail");
$this->set(compact('index','TableTails'));
}
public function table()
{SessionComponent::delete('TableTail');
	$this->loadModel('TypeComponent');
	$types=$this->TypeComponent->find('all');
	$this->set(compact('types'));
}
public function view($liste=null)
{
	echo $liste;
die();
}
 public function delete($liste=null)
 {
$index=explode(',',$liste);
 	$this->Session->delete('TableTail.'.$index[0].'.'.$index[1].'.data.'.$index[2]);
 	return null;
 }

public function editExemple($liste=null)
{
	$index=explode(',',$liste);
	$this->Session->write('TableTail.'.$index[0].'.'.$index[1].'.data.'.$index[2],$index[3]);
return null;
}

public function edit($liste=null)
{
	$detailsession=$this->Session->read("TableTail");
	echo "<pre>";
	print_r($detailsession);
echo "</pre>";
	die();
}
public function tableau($coordonner=null)
{
$coordonners=explode(',',$coordonner);
$detail="";
for ($i=0; $i <$coordonners[0]+1 ; $i++) { 
	for ($j=0; $j <$coordonners[1]+1 ; $j++) { 	
		$detail[$j]=array(
			'type'=>$this->gettypes($j),
			'color'=>$this->getcolor($i,$j),
			'display'=>$this->getdisplay($j),
			'data'=>$this->getData($i,$j)
			);
}
$tableaux[$i]=$detail;
}
$this->Session->write("TableTail",$tableaux);
$TableTails=$this->Session->read("TableTail");

$this->set(compact('TableTails','coordonners'));
}
public function getData($i,$j)
{
	return $this->Session->read('TableTail.'.$i.'.'.$j.'.data')?
	array_values($this->Session->read('TableTail.'.$i.'.'.$j.'.data')):array();
}
public function getcolor($i,$j)
{
	if($this->Session->read('TableTail.'.$i.'.'.$j.'.color'))
		$color= $this->Session->read('TableTail.'.$i.'.'.$j.'.color');
		else if($this->Session->read('TableTail.'.$i.'.0'.'.color'))
         $color= $this->Session->read('TableTail.'.$i.'.0'.'.color');
		 else if($this->Session->read('TableTail.0.'.$j.'.color'))
	    $color= $this->Session->read('TableTail.0.'.$j.'.color');
	else $color= "";
return $color;

}
public function gettypes($j=null)
{
return ($this->Session->read('TableTail.1.'.$j.'.type'))?
$this->Session->read('TableTail.1.'.$j.'.type'):"";
}
public function getdisplay($j=null)
{
return ($this->Session->read('TableTail.0.'.$j.'.display'))?
$this->Session->read('TableTail.0.'.$j.'.display'):"";
}
public function colors($liste=null)
{

$indexcolor=explode(',',$liste);

$this->Session->delete('TableTail.'.$indexcolor[0].'.'.$indexcolor[1].'.color');
$this->Session->write('TableTail.'.$indexcolor[0].'.'.$indexcolor[1].'.color',$indexcolor[2]);
$this->tableau($indexcolor[3].",".$indexcolor[4]);
exit;	
}
public function typeCom($liste=null)
{
$indexcolor=explode(',',$liste);
$this->Session->delete('TableTail.1.'.$indexcolor[0].'.type');
$this->Session->write('TableTail.1.'.$indexcolor[0].'.type',$indexcolor[1]);
exit;	
}
public function displaycol($liste=null)
{
$indexcolor=explode('.',$liste);
$display=explode(',',$indexcolor[1]);
$this->Session->delete('TableTail.0.'.$indexcolor[0].'.display');
$this->Session->write('TableTail.0.'.$indexcolor[0].'.display',$display[0]);
$this->tableau($display[1].",".$display[2]);
exit;	
}
public function boite()
{

}
}
