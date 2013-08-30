<div class="companies view">
<?php
	echo $this->Html->tag('h2', $company['Company']['name']); 
	echo $this->Html->tag('p', __('Created: %s', $this->Time->timeAgoInWords($company['Company']['created'])));
	echo $this->Html->tag('p', __('Published Jobs:'));
	$jobLinks = array();
	foreach ($company['Job'] as $job) {
		$jobLinks[] = $this->Html->link($job['name'], array(
			'controller' => 'jobs',
			'action' => 'details',
			$job['id']
		));
	}
	echo $this->Html->nestedList($jobLinks);
?>
</div>
