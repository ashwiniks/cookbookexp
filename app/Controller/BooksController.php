<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP BooksController
   * @author ashwinisingh
   */
  class BooksController extends AppController {
      public $components = array('RequestHandler');
      public function index($id) {
          
      }
      
      
      public function beforeFilter() {
          parent::beforeFilter();
          if ($this->request->is('ajax')) {
              $this->response->disableCache();
          }
      }

      public function listing() {
          $books = $this->Book->find('all', array('fields' =>
              array('name', 'stock')));
          $this->set(array(
              'books' => Hash::extract($books, '{n}.Book'),
              '_serialize' => array('books')
          ));
      }

      public function inventory_index() {
          $this->set('books', $this->Book->find('all'));
      }

  }
  