<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{
public function initialize (array $config)
{
  parent::initialize($config);

  $this->setTable('users');
  $this->setPrimaryKey('id');
  $this->setDisplayField('name');
  $this->addBehavior('Timestamp');
  $this->hasMany('Posts',
  ['foreignKey'=>'user_id']);
}

public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }


}
 ?>
