<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('registrationNumber'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($people as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['registrationNumber']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['email']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['photo']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['created']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $person['Person']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Event Attendances'), array('controller' => 'event_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Attendance'), array('controller' => 'event_attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
