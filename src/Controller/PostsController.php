<?php

namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
  public function index()
  {
  //dapatkan senarai users
  $this->paginate = ['contain'=>'Users'];
   $posts = $this->paginate($this->Posts);
   //pr ($user);
   //hantar data ke template
    $this->set('posts', $posts);
  }

  //untuk lihat detail
  public function view($id=null){

     //$posts = $this->Posts->find()->contain(['Users'])where(['post.id'=>$id]);


        if ($id==null)
        {
          die('No ID,Try Again');
        }

        //query ke database base on id yang dipassing
        $post = $this->Posts->get($id);
        //pr($user);exit;

        //
        $this->set('post',$post);
      }

  public function add()
  {
      $post = $this->Posts->newEntity();
    //1. check kalau ada post daripada form
      if ($this->request->is('post'))
      {
        //pr('ada post'); exit;
        //pr($this->request->data); exit;
        //2.bgth cake nak buat record baru

        //3.masukkan data daripada form ke record baru yang kosong
        $post = $this->Posts->patchEntity($post, $this->request->data());
        // 4.save ke dalam table user data dariada form
        If ($this->Posts->save($post)) {
          //5. papar mesej berjaya
          $this->Flash->success('Record Saved');

          //6.redirect ke senarai indexs
          return $this->redirect(['action'=>'index']);
        }
      }

      $users = $this->Posts->Users->find('list');

      // pr($users->toArray()); exit;

      $this->set('post',$post);
      $this->set('users', $users);
}

    public function edit($id=null){
      //1. dapatkan single record bagi user
      $post = $this->Posts->get($id);
      //2.check form data
      if ($this->request->is(['push', 'put', 'patch']))
      {
      //pr($user->request->data); exit;

      //check dulu structure dapatkan
      //3.Assign edited data kepada data asal
      $post = $this->Posts->patchEntity($post, $this->request->data());
      //4.save edited data ke database table
      If ($this->Posts->save($post))
      {
        //5. papar mesej berjaya
        $this->Flash->success('Record Saved');

        //6.redirect ke senarai index
        return $this->redirect(['action'=>'index']);
      }
    }
    $users = $this->Posts->Users->find('list');

    // pr($users->toArray()); exit;
    $this->set('users', $users);
    $this->set('post', $post);

    }

    public function delete($id=null){
      $post = $this->Posts->get($id);

      If ($this->Posts->delete($post))
      {
        $this->Flash->success('Row Deleted');
        $this->redirect(['action'=> 'index']);
      }

    }

  }
?>
