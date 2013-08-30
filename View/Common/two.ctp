<?php $this->layout = 'front'; ?>
<div class="row-fluid">
	<div class="span6">
		<?php echo $this->fetch('left-column'); ?>
	</div>
	<div class="span6">
		<?php echo $this->fetch('right-column'); ?>
	</div>
</div>
<?php echo $this->fetch('content'); ?>