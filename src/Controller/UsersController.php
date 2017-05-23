<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController {
  public function index()
  {
  //dapatkan senarai users
   $users  = $this->paginate('Users');
   //pr ($users);
   //hantar data ke template
    $this->set('users', $users);


  }


}


 ?>
