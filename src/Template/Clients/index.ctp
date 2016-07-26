<!-- File: src/Template/Clients/index.ctp -->

<h1>Client CRM</h1>
<table class="subnav">
  <tr>
    <td><?= $this->Html->link('Add New Client', ['action' => 'add']) ?></td>
  </tr>
</table>
<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($clients as $client): ?>
    <tr>
        <td><?= $this->Html->link($client->id, ['action' => 'view', $client->id]) ?></td>
        <td><?= $client->first_name ?></td>
        <td><?= $client->last_name ?></td>
        <td><?= $client->phone_number ?></td>
        <td><?= $client->email ?></td>
        <td>
            <?= $client->created->format(DATE_RFC850) ?>
        </td>
        <td><?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $client->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $client->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
