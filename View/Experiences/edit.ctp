<div class="experiences form">
<?php echo $this->Form->create('Experience'); ?>
	<fieldset>
		<legend><?php echo __('Edit Experience'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('description');
		echo $this->Form->input('cv_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Experience.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Experience.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
