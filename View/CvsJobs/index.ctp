<div class="cvsJobs index">
	<h2><?php echo __('Cvs Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cv_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cvsJobs as $cvsJob): ?>
	<tr>
		<td><?php echo h($cvsJob['CvsJob']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cvsJob['Cv']['id'], array('controller' => 'cvs', 'action' => 'view', $cvsJob['Cv']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cvsJob['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $cvsJob['Job']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cvsJob['CvsJob']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cvsJob['CvsJob']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cvsJob['CvsJob']['id']), null, __('Are you sure you want to delete # %s?', $cvsJob['CvsJob']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cvs Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
