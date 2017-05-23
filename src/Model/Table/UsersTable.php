<?php
namespace App\Model\Table;

use Cake\ORM\query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validation;

class UserTable extends Table{
public function initialize (array $config){
  parent::initialize($config);

  $this -> setTable ('users');
    $this -> setPrimaryKey ('id');
      $this -> setDisplayField ('name');



}
}


















 ?>
