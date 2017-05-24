<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController {
  public function index()
  {
  //dapatkan senarai users
   $users = $this->paginate('Users');
   //pr ($user);
   //hantar data ke template
    $this->set('users', $users);


  }

  //untuk lihat detail
  public function view($id=null){
        if ($id==null)
        {
          die('No ID,Try Again');
        }


        //query ke database base on id yang dipassing
        $user = $this->Users->get($id);
        //pr($user);exit;

        //
        $this->set('user',$user);
      }


  public function add()
  {
    //1. check kalau ada post daripada form
      if ($this->request->is('post'))
      {
        //pr('ada post'); exit;
        //pr($this->request->data); exit;
        //2.bgth cake nak buat record baru
        $user = $this->Users->newEntity();
        //3.masukkan data daripada form ke record baru yang kosong
        $user = $this->Users->patchEntity($user, $this->request->data());



        // 4.save ke dalam table user data dariada form
        If ($this->Users->save($user))
        {
          //5. papar mesej berjaya
          $this->Flash->success('Record Saved');

          //6.redirect ke senarai index
          return $this->redirect(['action'=>'index']);
        }
      }
    }

    public function edit($id=null){
      //1. dapatkan single record bagi user
      $user = $this->Users->get($id);
      //2.check form data
      if ($this->request->is(['push', 'put', 'patch']))
      {
      //pr($user->request->data); exit;

      //check dulu structure dapatkan
      //3.Assign edited data kepada data asal
      $user = $this->Users->patchEntity($user, $this->request->data());
      //4.save edited data ke database table
      If ($this->Users->save($user))
      {
        //5. papar mesej berjaya
        $this->Flash->success('Record Saved');

        //6.redirect ke senarai index
        return $this->redirect(['action'=>'index']);
      }
    }

    $this->set('user', $user);

    }

    public function delete($id=null){
      $user = $this->Users->get($id);

      If ($this->Users->delete($user))
      {
        $this->Flash->success('Row Deleted');
        $this->redirect(['action'=> 'index']);
      }

    }

  }
?>
