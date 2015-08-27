<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');

  /**
   * CakePHP ExampleController
   * @author ashwinisingh
   */
  class ExampleController extends AppController {
      public $components=array('cookies'=>array('time'=>'+1day'));

      public function index($id) {
          
      }
  public function cookie() {
       $this->Cookie->write("cakename", "sanhs");  
      }

  }
  