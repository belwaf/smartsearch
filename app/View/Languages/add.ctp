

<br></br>
<div class="col-sm-2">
	<div class="control-side text-center">
		
			<div><button class="btn btn-primary" >
			<?php echo $this->Html->link(__('List Languages'), array('action' => 'index')); ?>
		</button></div>
			
		</div></div>

<div class="col-md-6">
<div ba-panel="" ba-panel-title="Standard Fields" ba-panel-class="with-scroll">
    <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur="" style="background-size: 1530px 861px; background-position: 0px -64px;min-height: 441px">
    <div class="panel-heading clearfix"><h3 class="panel-title"><?php echo __('Add Language'); ?></h3>
    </div>
    <div class="panel">
<?php echo $this->Form->create('Language'); ?>


 <div class="form-group">
	<?php echo $this->Form->input('name',array('label'=>false,'class'=>'form-control input-lg',' placeholder'=>'name'));?>
</div><br>
<div class="form-group">
	<?php echo $this->Form->input('abbreviation',array('label'=>false,'class'=>'form-control input-lg',' placeholder'=>'abbreviation'));?>
</div><br>
 <div class="form-group">
                                <input type="submit" name="submit" id="name" class="form-control input-lg" value="Add" tabindex="1">
                            </div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div></div>
</div>
