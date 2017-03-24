
<br></br>
<div class="col-sm-2">
	<div class="control-side text-center">
		
			<div><button class="btn btn-primary" >
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Language.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Language.id'))); ?>
		</button></div>
			<div><button class="btn btn-primary" >
		<?php echo $this->Html->link(__('List Languges'), array('action' => 'index')); ?>
		</button></div>
		</div></div>

<div class="col-md-6">
<div ba-panel="" ba-panel-title="Standard Fields" ba-panel-class="with-scroll">
    <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur="" style="background-size: 1530px 861px; background-position: 0px -64px;min-height: 441px">
    <div class="panel-heading clearfix"><h3 class="panel-title"><?php echo __('Edit languages'); ?></h3>
    </div>
    <div class="panel">
<?php echo $this->Form->create('Composant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Composant'); ?></legend>
	
	<?php
		echo $this->Form->input('id');?>
		<div class="form-group">
	<?php echo $this->Form->input('titre',array('label'=>false,'class'=>'form-control input-lg',' placeholder'=>__('titre')));?>
</div><br>
<div class="form-group">
	<?php 
		echo $this->Form->input('description',array('label'=>false,'class'=>'form-control input-lg',' placeholder'=>__('description')));?>
</div><br>
	<?php 	foreach ($types as $key => $value) {
			$tab[$value['TypeComponent']['id']]=$value['TypeComponent']['description'];
		}
	?> <div class="form-group">
	<?php echo $this->Form->input('type_id',array('label'=>false,'class'=>'form-control input-lg',' placeholder'=>'abbreviation','type'=>'select','options'=>$tab));
	?>
</div>
	 <div class="form-group">
                                <input type="submit" name="submit" id="name" class="form-control input-lg" value="Add" tabindex="1">
                            </div>
<?php echo $this->Form->end(__('')); ?>
</div>
</div></div>
</div>