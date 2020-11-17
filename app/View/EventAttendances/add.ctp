<div class="eventAttendances form">
<?php echo $this->Form->create('EventAttendance'); ?>
	<fieldset>
		<legend><?php echo __('Add Event Attendance'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('check_in');
		echo $this->Form->input('check_out');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Event Attendances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
