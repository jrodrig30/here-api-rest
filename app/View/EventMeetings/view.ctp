<div class="eventMeetings view">
<h2><?php echo __('Event Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventMeeting['EventMeeting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eventMeeting['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventMeeting['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($eventMeeting['EventMeeting']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($eventMeeting['EventMeeting']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($eventMeeting['EventMeeting']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($eventMeeting['EventMeeting']['details']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Meeting'), array('action' => 'edit', $eventMeeting['EventMeeting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Meeting'), array('action' => 'delete', $eventMeeting['EventMeeting']['id']), array(), __('Are you sure you want to delete # %s?', $eventMeeting['EventMeeting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
