<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
    
	public $components = array('Paginator');
        
/*
@beforeFilter
allow add and logout in user contreoller for all users
*/
     public function beforeFilter() {
           parent::beforeFilter();
           $this->Auth->allow( 'login', 'logout' );
       }
       
/*
* @isAuthorize
* deny other users to edit or delete
* admin has all access rights
*/
       public function isAuthorized($user) {
           
           if($user['role'] == 'admin'){
               return TRUE;
           }
           if(in_array( $this->action, array( 'edit', 'delete' ) )){
               if( $user['id'] != $this->request->params['pass'][0] ){
                   return FALSE;
               }
               return TRUE;
           }
       }

 /**
* login method
*
*/
       
       public function login(){
             if( $this->request->is('post') ){
                 if( $this->Auth->login() ){
                     return $this->redirect($this->Auth->redirectUrl());
                 }
                 $this->Session->setFlash(__('Invalid username or password. Try again'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class'=> 'alert-danger'
                                ));
             }
           }
   
/**
* logout method
*
*/
           public function logout(){
               return $this->redirect($this->Auth->logout());
           }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    
			$this->User->create();
                        $this->request->data['User']['created'] = date_default_timezone_set("Asia/Kolkata");
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
		}
		return $this->redirect(array('action' => 'index'));
	}}
