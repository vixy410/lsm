<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
     public $helpers = array(
                                'Html' => array('className' => 'BoostCake.BoostCakeHtml'), 
                                'Form' => array('className' => 'BoostCake.BoostCakeForm'),
                                'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
                                'Session',
                                );
    public $components = array( 
                             
                                'Session',
                                'Auth' => array(
                                            'flash' =>array(
                                                'element' =>'alert',
                                                'key' => 'auth',
                                                'params' => array(
                                                    'plugin' => 'BoostCake',
                                                    'class' => 'alert-danger'
                                                )
                                            ),
                                            'loginRedirect' => array('controller' => 'leads' ,'action' => 'index'),
                                            'logoutRedirect' => array('controller' => 'users','action'=> 'login' ),
                                            'authError' => 'You are not authorized to access this page',// put  echo $this->Session->flash('auth'); in default.ctp
                                            'authorize' => array('Controller')
                                            ),
                                'Cookie',
                                'RequestHandler',
                                //'Security'
                                );
    
    /*
isAuthorize method
access rights to login user        
        
*/
    
    public function isAuthorized( $user ){
        return true;
    }
        
/*
beforeFilter method
access rights to non-logged in users
*/
    
    public function beforeRender() {
     $this->response->disableCache();

}
    
    public function beforeFilter() {
        parent::beforeFilter();

        
    //$datetime = $this->Time->convert(time(), 'Asia/Kolkata');
   // echo date('d-m-Y H:i:s'); //Returns IST
    $this->Auth->allow( 'login' );
                // variable $logged_in contains login identifier
        $this->set( 'logged_in', $this->Auth->loggedIn() ); // used in view
                // $current_user contains current user info with id
        $this->set( 'current_user', $this->Auth->user() ); //used in view
        
       // App::import('Model', 'User');
         // User::store($this->Auth->user());
    }
    
   
}
