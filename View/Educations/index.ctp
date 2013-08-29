<div class="educations index">
	<h2><?php echo __('Educations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('cv_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($educations as $education): ?>
	<tr>
		<td><?php echo h($education['Education']['id']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['name']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['description']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($education['Education']['end_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($education['Cv']['id'], array('controller' => 'cvs', 'action' => 'view', $education['Cv']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $education['Education']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $education['Education']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $education['Education']['id']), null, __('Are you sure you want to delete # %s?', $education['Education']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Education'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
