<div class="jobs view">
<h2><?php echo h($job['Job']['name']); ?></h2>
<?php 
	// you can use Html helper too
	echo $this->Html->tag('p', __('Created: %s', $this->Time->timeAgoInWords($job['Job']['created'])));
	echo $this->Html->tag('p', h($job['Job']['description']));
	echo $this->Html->link($job['Company']['name'], array(
		'controller' => 'companies', 
		'action' => 'details', 
		$job['Company']['id'])); 
?>
</div>
