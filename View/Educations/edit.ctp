<?php $this->extend('/Common/two'); ?>
<?php $this->start('left-column'); ?>
<div>
<?php echo $this->Form->create('Education'); ?>
	<fieldset>
		<legend><?php echo __('Edit Education'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('cv_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php $this->end(); ?>
<?php $this->start('right-column'); ?>
<div>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Education.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Education.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Educations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php $this->end(); ?>
