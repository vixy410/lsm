<?php
App::uses('AppController', 'Controller');

/**
 * Leads Controller
 *
 * @property Lead $Lead
 * @property PaginatorComponent $Paginator
 */
class LeadsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	  public $components = array('Paginator','CsvView.CsvView');

          /**
* export method
* Export to csv
* public $components = array('Cookie','RequestHandler','Security') in AppControler
*/
        //var $components = array('RequestHandler');
        
        
    function exportView(){
        $this->Lead->contain( array('Account','Status') );
        $data = $this->Lead->find( 'all' );
        //$data_two = $this->Account->find( 'all' );
        //$data_three = $this->Status->find('all');
        
        $_serialize = array('data');
        
        $_header = array('Id',
                           'Account Name',
                           'Name',
                           'Board Number',
                           'Mobile Number',
                           'Requirements',
                           'Total price Quoted',
                           'Our price',
                           'Margin',
                           'Expected Closing month',
                           'Probablity',
                           'Status',
                           'Date Added'
                );
        
        $_extract = array(
                            'Lead.id',
                            'Account.account_name',
                            'Lead.name',
                            'Lead.board_number',
                            'Lead.mobile_number',
                            'Lead.requirements',
                            'Lead.total_price_quoted',
                            'Lead.our_price',
                            'Lead.margin',
                            'Lead.closing_month',
                            'Lead.probablity',
                            'Status.status',
                            'Lead.date_added'
        );
        
         $this->response->download(date("Y-m-d").'.csv');
        
        $this->viewClass = 'CsvView.Csv';
        $this->set( compact( 'data', '_serialize', '_header', '_extract' ) );
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lead->recursive = 0;
                $this->Paginator->settings = array(
                    'order' => array(
                        'date_added' => 'desc'
                    )
                );
		$this->set('leads', $this->Paginator->paginate());
                
                
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lead->exists($id)) {
			throw new NotFoundException(__('Invalid lead'));
		}
		$options = array('conditions' => array('Lead.' . $this->Lead->primaryKey => $id));
		$this->set('lead', $this->Lead->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lead->create();
			if ($this->Lead->save($this->request->data)) {
				$this->Session->setFlash(__('The lead has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
			}
		}
                
                
                   

		$accounts = $this->Lead->Account->find('list');
		$statuses = $this->Lead->Status->find('list');
		$users = $this->Lead->User->find('list');
		$this->set(compact('accounts', 'statuses', 'users'));
                //$this->set('email' , $email);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lead->exists($id)) {
			throw new NotFoundException(__('Invalid lead'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lead->save($this->request->data)) {
				$this->Session->setFlash(__('The lead has been saved.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
			}
		} else {
			$options = array('conditions' => array('Lead.' . $this->Lead->primaryKey => $id));
			$this->request->data = $this->Lead->find('first', $options);
		}
		$accounts = $this->Lead->Account->find('list');
		$statuses = $this->Lead->Status->find('list');
		$users = $this->Lead->User->find('list');
		$this->set(compact('accounts', 'statuses', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lead->id = $id;
		if (!$this->Lead->exists()) {
			throw new NotFoundException(__('Invalid lead'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lead->delete()) {
			$this->Session->setFlash(__('The lead has been deleted.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-success'
                                ));
		} else {
			$this->Session->setFlash(__('The lead could not be deleted. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class' => 'alert-danger'
                                ));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        
        public function active(){
            $this->Lead->recursive = 0;
                $this->Paginator->settings = array(
                    'conditions' => array('Status.status' => 'Active'),
                    'order' => array(
                        'date_added' => 'desc')
                );
		$this->set('leads', $this->Paginator->paginate());
        }
        
        
         public function closed(){
            $this->Lead->recursive = 0;
                $this->Paginator->settings = array(
                    'order' => array(
                        'date_added' => 'desc'
                    ),
                    'conditions' => array('Status.status' => 'Closed')
                );
		$this->set('leads', $this->Paginator->paginate());
        }
        
        
         public function won(){
            $this->Lead->recursive = 0;
                $this->Paginator->settings = array(
                    'order' => array(
                        'date_added' => 'desc'
                    ),
                    'conditions' => array('Status.status' => 'Won')
                );
		$this->set('leads', $this->Paginator->paginate());
        }
        
        
         public function lost(){
            $this->Lead->recursive = 0;
                $this->Paginator->settings = array(
                    'order' => array(
                        'date_added' => 'desc'
                    ),
                    'conditions' => array('Status.status' => 'Lost')
                );
		$this->set('leads', $this->Paginator->paginate());
        }
        
        
        }
