<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP ApiController
   * @author ashwinisingh
   */
  class ApiController extends AppController {

      public function index($id) {
          
      }
      public function delegate($object, $command) {
  $result = null;
  try {
  if ($this->request->is('post') || $this->request->is('put')) {
  $args = $this->request->data;
  } else {
  $args = $this->request->query;
  }
  $component = Inflector::($object);
  $this->{$component} = $this->Components->load($component);
  $this->{$component}->initialize($this);
  $action = Inflector::camelize($command);
  $return = $this->{$component}->{$action}($args);
  if ($this->{$component}->status === 'success') {
  $result = $this->_success($return);
  } else {
  $result = $this->_fail($return);
  }
  } catch(Exception $e) {
  $result = $this->_error($e->getMessage(), $e->getCode(),
  $result);
  }
  $this->response->type('json');
  $this->response->statusCode(200);
  $this->response->body($result);
  $this->response->send();
  $this->_stop();
  }
  }

 
  