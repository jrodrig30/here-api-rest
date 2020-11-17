<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($event['Event']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($event['Event']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($event['Event']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Meetings'), array('controller' => 'event_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Meeting'), array('controller' => 'event_meetings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Event Meetings'); ?></h3>
	<?php if (!empty($event['EventMeeting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Details'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['EventMeeting'] as $eventMeeting): ?>
		<tr>
			<td><?php echo $eventMeeting['id']; ?></td>
			<td><?php echo $eventMeeting['event_id']; ?></td>
			<td><?php echo $eventMeeting['date']; ?></td>
			<td><?php echo $eventMeeting['start_time']; ?></td>
			<td><?php echo $eventMeeting['end_time']; ?></td>
			<td><?php echo $eventMeeting['details']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'event_meetings', 'action' => 'view', $eventMeeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'event_meetings', 'action' => 'edit', $eventMeeting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'event_meetings', 'action' => 'delete', $eventMeeting['id']), array(), __('Are you sure you want to delete # %s?', $eventMeeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Meeting'), array('controller' => 'event_meetings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
