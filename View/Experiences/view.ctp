<div class="experiences view">
<h2><?php echo __('Experience'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Cv']['id'], array('controller' => 'cvs', 'action' => 'view', $experience['Cv']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Experience'), array('action' => 'edit', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Experience'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cvs'), array('controller' => 'cvs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cv'), array('controller' => 'cvs', 'action' => 'add')); ?> </li>
	</ul>
</div>
