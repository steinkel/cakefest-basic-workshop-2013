<div class="cvs index">
	<h2><?php echo __('Cvs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cvs as $cv): ?>
	<tr>
		<td><?php echo h($cv['Cv']['id']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['email']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['bio']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['created']); ?>&nbsp;</td>
		<td><?php echo h($cv['Cv']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cv['Cv']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cv['Cv']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cv['Cv']['id']), null, __('Are you sure you want to delete # %s?', $cv['Cv']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cv'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Educations'), array('controller' => 'educations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education'), array('controller' => 'educations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
