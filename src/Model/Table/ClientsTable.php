<?php
// src/Model/Table/ArticlesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('first_name')
            ->requirePresence('first_name')
            ->notEmpty('last_name')
            ->requirePresence('last_name')
            ->notEmpty('phone_number')
            ->requirePresence('phone_number')
            ->notEmpty('email')
            ->requirePresence('email');

        return $validator;
    }
}
?>
