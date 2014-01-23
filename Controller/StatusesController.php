<?php
App::uses('AppController', 'Controller');
/**
 * Statuses Controller
 *
 * @property Status $Status
 * @property PaginatorComponent $Paginator
 */
class StatusesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Status->recursive = 0;
		$this->set('statuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Status->exists($id)) {
			throw new NotFoundException(__('Invalid status'));
		}
		$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
		$this->set('status', $this->Status->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Status->create();
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash(__('The status has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status could not be saved. Please, try again.'),'alert',array(
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
		if (!$this->Status->exists($id)) {
			throw new NotFoundException(__('Invalid status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash(__('The status has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
			}
		} else {
			$options = array('conditions' => array('Status.' . $this->Status->primaryKey => $id));
			$this->request->data = $this->Status->find('first', $options);
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
		$this->Status->id = $id;
		if (!$this->Status->exists()) {
			throw new NotFoundException(__('Invalid status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Status->delete()) {
			$this->Session->setFlash(__('The status has been deleted.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
		} else {
			$this->Session->setFlash(__('The status could not be deleted. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
		}
		return $this->redirect(array('action' => 'index'));
	}}
