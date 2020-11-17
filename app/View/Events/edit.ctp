<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Event Meetings'), array('controller' => 'event_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Meeting'), array('controller' => 'event_meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
