<div class="languges view">
<h2><?php  echo __('Language'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($Language['Language']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($Language['Language']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abbreviation'); ?></dt>
		<dd>
			<?php echo h($Language['Language']['abbreviation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Language'), array('action' => 'edit', $Language['Language']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Language'), array('action' => 'delete', $Language['Language']['id']), null, __('Are you sure you want to delete # %s?', $Language['Language']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Languges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('action' => 'add')); ?> </li>
	</ul>
</div>
