<h1>Add People</h1>
<?php
echo $this->Form->create('Person');
echo $this->Form->input('name');
echo $this->Form->input('registration_number');
echo $this->Form->input('email');
echo $this->Form->input('photo');
echo $this->Form->end('Save Person');
?>