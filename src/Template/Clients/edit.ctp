<!-- File: src/Template/Clients/edit.ctp -->

<h1>Update Client Information</h1>
<?php
    echo $this->Form->create($client);
    echo $this->Form->input('first_name');
    echo $this->Form->input('last_name');
    echo $this->Form->input('phone_number');
    echo $this->Form->input('email');
    echo $this->Form->input('notes', ['rows' => '5']);
    echo $this->Form->button(__('Update Client Information'));
    echo $this->Form->end();
?>
