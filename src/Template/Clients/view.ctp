<!-- File: src/Template/Clients/view.ctp -->

<h1><?= h($client->first_name) ?> <?= h($client->last_name) ?></h1>
<p>Phone Number: <?= h($client->phone_number) ?></p>
<p>Email: <?= h($client->email) ?></p>
<p>Notes: <?= h($client->notes) ?></p>
<p><small>Created: <?= $client->created->format(DATE_RFC850) ?></small></p>
