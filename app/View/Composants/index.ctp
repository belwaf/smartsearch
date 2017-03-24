
<br></br>
<div class="col-sm-2">
	<div class="control-side text-center">
		
			<div><button class="btn btn-primary" ng-click="collapse()">
			<?php echo $this->Html->link(__('New Component'), array('action' => 'add')); ?>
		</button></div>
			
		</div></div>


<div class="col-md-6">
<div ba-panel="" ba-panel-title="Standard Fields" ba-panel-class="with-scroll">
    <div class="panel panel-blur with-scroll animated zoomIn" zoom-in="" ba-panel-blur="" style="background-size: 1530px 861px; background-position: 0px -64px;min-height: 441px">
    <div class="panel-heading clearfix"><h3 class="panel-title"><?php echo __('Languages'); ?></h3>
    </div>
    <div class="panel">
	<table class="table table-bordered table-hover table-condensed">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titre'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($composants as $composant): ?>
	<tr>
		<td><?php echo h($composant['Composant']['id']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['titre']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['description']); ?>&nbsp;</td>
		<td><?php echo h($composant['Composant']['type_id']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $composant['Composant']['id']),array('class'=>'fa fa-pencil')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $composant['Composant']['id']), array('class'=>'fa fa-trash'), __('Are you sure you want to delete # %s?', $composant['Composant']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div></div>