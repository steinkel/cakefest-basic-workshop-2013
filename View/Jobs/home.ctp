<?php echo $this->element('home-header'); ?>
<div class="row-fluid">
  <div class="span6">
	<h2>Latest Jobs</h2>
		<ul>
		<?php foreach ($jobs as $job) : ?>
			<li><?php echo $this->Html->link($job['Job']['name'], array(
				'controller' => 'jobs',
				'action' => 'details',
				$job['Job']['id']
			));?></li>
		<?php endforeach; ?>
		</ul>
  </div><!--/span-->
  <div class="span6">
	<h2>Latest Companies</h2>
	<!-- if there is time available, refactor into a single element and pass model name as variable -->
		<ul>
		<?php foreach ($companies as $company) : ?>
			<li><?php echo $this->Html->link($company['Company']['name'], array(
				'controller' => 'companies',
				'action' => 'details',
				$job['Company']['id']
			));?></li>
		<?php endforeach; ?>
		</ul>
  </div><!--/span-->
</div><!--/row-->

<?php $this->start('sidebar'); ?>
<ul class="nav nav-list">
	<li>This goes into our sidebar !</li>
</ul>
<?php 
$this->end();