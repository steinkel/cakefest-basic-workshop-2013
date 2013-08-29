<div class="cvsJobs form">
<?php echo $this->Form->create('CvsJob'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cvs Job'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cv_id');
		echo $this->Form->input('job_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CvsJob.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CvsJob.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs Jobs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
