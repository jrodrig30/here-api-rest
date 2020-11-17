<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registration Number'); ?></dt>
		<dd>
			<?php echo h($person['Person']['registrationNumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($person['Person']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($person['Person']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($person['Person']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), array(), __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Attendances'), array('controller' => 'event_attendances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Attendance'), array('controller' => 'event_attendances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Event Attendances'); ?></h3>
	<?php if (!empty($person['EventAttendance'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Check In'); ?></th>
		<th><?php echo __('Check Out'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($person['EventAttendance'] as $eventAttendance): ?>
		<tr>
			<td><?php echo $eventAttendance['id']; ?></td>
			<td><?php echo $eventAttendance['person_id']; ?></td>
			<td><?php echo $eventAttendance['check_in']; ?></td>
			<td><?php echo $eventAttendance['check_out']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'event_attendances', 'action' => 'view', $eventAttendance['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'event_attendances', 'action' => 'edit', $eventAttendance['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'event_attendances', 'action' => 'delete', $eventAttendance['id']), array(), __('Are you sure you want to delete # %s?', $eventAttendance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Attendance'), array('controller' => 'event_attendances', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
