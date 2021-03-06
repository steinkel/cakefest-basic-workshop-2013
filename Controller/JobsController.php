<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {

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
		$this->Job->recursive = 0;
		$this->Paginator->settings = array('findType' => 'latest');
		$this->set('jobs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Job->create();
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		}
		$companies = $this->Job->Company->find('list');
		$cvs = $this->Job->Cv->find('list');
		$this->set(compact('companies', 'cvs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
		$companies = $this->Job->Company->find('list');
		$cvs = $this->Job->Cv->find('list');
		$this->set(compact('companies', 'cvs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__('The job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * Sample download log file
 */	
	public function download_log() {
		$this->log('test log to error.log file');
		$this->response->file(TMP . 'logs' . DS . 'error.log', array(
			'download' => true, 
			'name' => 'error_log_file_' . time() . '.txt'));
		$this->autoRender = false;
	}

/**
 * Display a Job profile
 * @param type $id
 */	
	public function details($id = null) {
		$this->layout = 'front';
		$this->view($id);
	}
	
/**
 * Main application public entrypoint
 */	
	public function home() {
		
		$this->layout = 'front';
		
		// get the cached latest companies
		$companies = Cache::read('companies');
        if (!$companies) {
            $companies = $this->Job->Company->find('all', array(
				'order' => 'Company.created DESC',
				'limit' => 5,
				'recursive' => -1
			));
            Cache::write('companies', $companies);
        }

		// get the latest jobs
		$jobs = $this->Job->find('latest');
		
		$this->set(compact('companies', 'jobs'));
	}	
}
