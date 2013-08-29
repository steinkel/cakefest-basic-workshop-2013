<div class="educations view">
<h2><?php echo __('Education'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($education['Education']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($education['Education']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($education['Education']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($education['Education']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($education['Education']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo $this->Html->link($education['Cv']['id'], array('controller' => 'cvs', 'action' => 'view', $education['Cv']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Education'), array('action' => 'edit', $education['Education']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Education'), array('action' => 'delete', $education['Education']['id']), null, __('Are you sure you want to delete # %s?', $education['Education']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Education'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
