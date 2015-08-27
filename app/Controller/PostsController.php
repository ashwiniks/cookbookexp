<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP PostsController
   * @author ashwinisingh
   */
  class PostsController extends AppController {
      public $components=array('RequestHandler');

      public function index() {
         $this->set('posts', $this->Post->find('all'));
          $this->set('_serialize', array('posts'));
      }
      public function view($id)
      {
          $post=$this->Post->findById($id);
          $this->set('post', $post);
          $this->set('_serialize', array('post'));
          
      }
      public function edit($id)
      {
          $this->Post->id=$id;
          $status=$this->Post->save($this->request->data);
          $stat=($status)?"updated":"their is some error";
          $this->set('status', $stat);
          $this->set('_serialize',array('status'));
          
      }
       public function add()
      {
          //$this->Post->id=$id;
          $status=$this->Post->save($this->request->data);
          $stat=($status)?"added":"their is some error";
          $this->set('status', $stat);
          $this->set('_serialize',array('status'));
          
      }
      
      public function delete($id)
      {
          $staus=$this->Post->delete($id);
          $stat=($staus)?"deleated":"their is some error";
          $this->set('status', $stat);
          $this->set('_serialize',array('status'));
          
      }
      public function admin_add()
      {
          
      }
  }
  