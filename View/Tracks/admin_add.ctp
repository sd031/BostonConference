<div class="tracks form">
<?php echo $this->Form->create('Track');?>
	<fieldset>
		<legend><?php echo __('Admin Add Track'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('color');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<?php
$this->append('sidebar');
?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tracks'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Talks'), array('controller' => 'talks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talk'), array('controller' => 'talks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
$this->end();
?>
