<div class="composants view">
<h2><?php  echo __('Composant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Id'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['type_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Composant'), array('action' => 'edit', $composant['Composant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Composant'), array('action' => 'delete', $composant['Composant']['id']), null, __('Are you sure you want to delete # %s?', $composant['Composant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
