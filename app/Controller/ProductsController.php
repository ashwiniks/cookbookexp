<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP ProductsController
   * @author ashwinisingh
   */
  class ProductsController extends AppController {
      public $helper=array('Form','Html');
      public $components=array('Paginator','Session');
      

      public function index() {
          $this->Paginator->settings = array('limit' => 2);
         
          $this->set('products', $this->Paginator->paginate());
          
      }
      
      public function add()
      {
          if(!empty($this->request->data))
          {
              if($this->request->save($this->request->data))
              {
                  $this->Session->setFlash("data has been saved");
              }
          }
          
          
      }
      
       public function edit($id=null)
      {      $this->Product->id = $id;
          if(!empty($this->request->data))
          {
              if($this->request->save($this->request->data))
              {
                  $this->Session->setFlash("data has been edited");
              }
          }
          
          
      }

      
      public function admin_login()
      {
          
          
          
      }
  }
  