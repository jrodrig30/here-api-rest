<div class="eventAttendances view">
<h2><?php echo __('Event Attendance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventAttendance['EventAttendance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventAttendance['Person']['name'], array('controller' => 'people', 'action' => 'view', $eventAttendance['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check In'); ?></dt>
		<dd>
			<?php echo h($eventAttendance['EventAttendance']['check_in']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Check Out'); ?></dt>
		<dd>
			<?php echo h($eventAttendance['EventAttendance']['check_out']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Attendance'), array('action' => 'edit', $eventAttendance['EventAttendance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Attendance'), array('action' => 'delete', $eventAttendance['EventAttendance']['id']), array(), __('Are you sure you want to delete # %s?', $eventAttendance['EventAttendance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Attendances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Attendance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
