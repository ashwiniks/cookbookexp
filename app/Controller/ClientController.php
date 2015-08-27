<?php

  /*
   * To change this license header, choose License Headers in Project Properties.
   * To change this template file, choose Tools | Templates
   * and open the template in the editor.
   */

  App::uses('AppController', 'Controller');
  App::uses('HttpSocket', 'Network/Http');

  /**
   * CakePHP ClientController
   * @author ashwinisingh
   */
  class ClientController extends AppController {
      public $components = array('Security', 'RequestHandler');
     
      
      public function index(){
     
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'posts.json';
         
        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
        $this->set('link', $link);
         
        $this -> render('/client/request_response');
    }
    
    public function view($id)
    {
       // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'posts/'.$id.'.json';
        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
        $this->set('link', $link);
         
        $this -> render('/client/request_response');
        
        
    }
      public function add()
    {
       // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'posts.json';
        $data = null;
        $data['Post']['title']="this is new title";
        $data['Post']['content']="this is new content";
        $httpSocket = new HttpSocket();
        $response = $httpSocket->post($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
        $this->set('link', $link);
         
        $this -> render('/client/request_response');
        
        
    }
    
        public function edit($id)
    {
       // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'posts/'.$id.'.json';
        $data = null;
        $httpSocket = new HttpSocket();
         $data['Post']['title']="this is updated title";
        $data['Post']['content']="this is updated content";
        $response = $httpSocket->put($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
        $this->set('link', $link);
         
        $this -> render('/client/request_response');
        
        
    }
    
    public function delete($id)
    {
        // remotely post the information to the server
        $link =  "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'posts/'.$id.'.json';
        $data = null;
        $httpSocket = new HttpSocket();
        // $data['Post']['title']="this is updated title";
        //$data['Post']['content']="this is updated content";
        $response = $httpSocket->delete($link, $data );
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);
        $this->set('link', $link);
         
        $this -> render('/client/request_response');
        
    }
  }
  