<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Component', 'Controller');
$helpers = array(
                                'Html' => array('className' => 'BoostCake.BoostCakeHtml'), 
                                'Form' => array('className' => 'BoostCake.BoostCakeForm'),
                                'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
                                'Session',
                                );

//use Cake\Controller\Component;

/**
 * CakePHP RedirectComponent
 * @author Meridian Solutions
 */
class RedirectComponent extends Component {
    var $controller = null;

    public $components = array('Session');
   // var $settings = array();
   // var $success = null;
   // var $warning = null;
   
    function initialize(Controller $controller) {
        parent::initialize($controller);
        
        $this->controller = $controller;
       /** $this->settings = array_merge(array(
            'success'=>'success',
            'warning' => 'warning'), 
                $config);
        $this->success = $this->settings['success'];
        $this->warning = $this->settings['warning'];*/
         
    }
    
    function flashSuccess($msg, $url = NULL){
        $this->Session->setFlash(__($msg, TRUE), 'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success',
                                   
                                ));
         $this->controller->redirect($url);
        if(empty($url)){
            $this->controller->redirect($url, null,TRUE);
        }
    }
    
    function flashWarning($msg, $url = NULL){
        $this->Session->setFlash(__($msg, TRUE),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
         $this->controller->redirect($url);
        if(empty($url)){
            $this->controller->redirect($url, null,TRUE);
        }
    }
    
    /*function idEmpty($id,$url){
        if(!$id || empty($this->controller->request->data)){
           $this->Session->setFlash(__('Invalid Id. Please Check your link','alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ),
                   $url));
        }
    }*/
    

}
