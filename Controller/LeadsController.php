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
        
   function export_leads(){
       $this->Lead->contain( array('Account.account_name','Status.status') );
       $data = $this->Lead->find('first', array( 'fields'=> array( 
                                                         'Lead.id',
                                                         'account' =>  'Account.account_name',
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
           )));
       $this->Export->exportCsv($data);
   }
        
    function export()
        {
            // Stop Cake from displaying action's execution time
            Configure::write('debug',0);
            // Find fields needed without recursing through associated models
            $data = $this->Lead->find(
                'all',
                 array(
                     'contain' => array(
                         'Account',
                         'Status'
                     ),
                     'fields' => array(
                         'id',
                         'account_id',
                         'name',
                         'email',
                         'board_number',
                         'mobile_number',
                         'requirements',
                         'total_price_quoted',
                         'our_price',
                         'margin',
                         'closing_month',
                         'probablity',
                         //'type_id',
                         //'status_id',
                         //'user_id',
                         'status_id',
                         'date_added'
                         ),
                     'order' => 'Lead.id ASC',
                     'contain' => FALSE
                 )
                    
            );
            // Define column headers for CSV file, in same array format as the data itself
            $headers = array(
                'Lead'=>array(
                    'id' => 'ID',
                    'account_id' => 'Account Name',
                    'name' => 'Name',
                    'email' => 'Email',
                    'board_number' => 'Board Number',
                    'mobile_number' => 'Mobile Number',
                    'requirements' => 'Requirements',
                    'total_price_quoted' => 'Total Price Quoted',
                    'our_price' => 'Our Price',
                    'margin' => 'Margin',
                    'closing_month' => 'Closing Month',
                    'probablity' => 'Probablity',
                    //'type_id' => 'Type',
                    //'status_id' => 'Status',
                    //'user_id' => 'Posted by',
                    'status_id' => 'Status',
                    'date_added' => 'Date'
                )
            );
            // Add headers to start of data array
            array_unshift($data,$headers);
            // Make the data available to the view (and the resulting CSV file)
            $this->set(compact('data'));
        } 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lead->recursive = 0;
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
                                    'class'=> 'alert-succsess'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class'=> 'alert-danger'
                                ));
			}
		}
		$accounts = $this->Lead->Account->find('list');
		$statuses = $this->Lead->Status->find('list');
		$users = $this->Lead->User->find('list');
		$this->set(compact('accounts', 'statuses', 'users'));
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
                                    'class'=> 'alert-success'
                                ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class'=> 'alert-danger'
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
                                    'class'=> 'alert-success'
                                ));
		} else {
			$this->Session->setFlash(__('The lead could not be deleted. Please, try again.'),'alert',array(
                                    'plugin' => 'BoostCake',
                                    'class'=> 'alert-danger'
                                ));
		}
		return $this->redirect(array('action' => 'index'));
	}}
