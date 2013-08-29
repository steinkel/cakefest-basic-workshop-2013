<div class="cvsJobs view">
<h2><?php echo __('Cvs Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cvsJob['CvsJob']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cvsJob['Cv']['id'], array('controller' => 'cvs', 'action' => 'view', $cvsJob['Cv']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cvsJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $cvsJob['Job']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cvs Job'), array('action' => 'edit', $cvsJob['CvsJob']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cvs Job'), array('action' => 'delete', $cvsJob['CvsJob']['id']), null, __('Are you sure you want to delete # %s?', $cvsJob['CvsJob']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cvs Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cvs Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
