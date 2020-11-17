<div class="eventMeetings index">
	<h2><?php echo __('Event Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('details'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eventMeetings as $eventMeeting): ?>
	<tr>
		<td><?php echo h($eventMeeting['EventMeeting']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventMeeting['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventMeeting['Event']['id'])); ?>
		</td>
		<td><?php echo h($eventMeeting['EventMeeting']['date']); ?>&nbsp;</td>
		<td><?php echo h($eventMeeting['EventMeeting']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($eventMeeting['EventMeeting']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($eventMeeting['EventMeeting']['details']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eventMeeting['EventMeeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eventMeeting['EventMeeting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eventMeeting['EventMeeting']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $eventMeeting['EventMeeting']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Event Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
