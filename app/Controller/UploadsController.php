<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP UploadsController
   * @author ashwinisingh
   */
  class UploadsController extends AppController {

      public function index() {
          $this->set('uploads', $this->Upload->find('all'));
      }
      
      public function upload() {
          if ($this->request->is('post')) {
              $this->Upload->create();
              if ($this->Upload->save($this->request->data)) {
                  $this->Session->setFlash(__('New file uploaded'));
                  //return $this->redirect(array('action' => 'index'));
              }
              $this->Session->setFlash(__('Could not upload file'));
          }
      }

  }
  