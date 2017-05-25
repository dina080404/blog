<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
public function initialize (array $config){
  parent::initialize($config);

  $this->setTable('posts');
  $this->setPrimaryKey('id');
  $this->setDisplayField('title');
  $this->addBehavior('Timestamp');

  $this->belongsTo('Users',['foreignKey'=>'user_id']);
}

public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('User', 'create')
            ->notEmpty('user');

        return $validator;
    }

}
?>
