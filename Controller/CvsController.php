<?php
App::uses('AppController', 'Controller');
/**
 * Cvs Controller
 *
 * @property Cv $Cv
 * @property PaginatorComponent $Paginator
 */
class CvsController extends AppController {

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
		$this->Cv->recursive = 0;
		$this->set('cvs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cv->exists($id)) {
			throw new NotFoundException(__('Invalid cv'));
		}

		$this->Cv->bindModel(
                        array('hasMany' => array(
                                        'CompletedExperience' => array(
                                                'className' => 'Experience',
                                                'conditions' => array('end_date < NOW()'),
                                        )
                                )
                ));
		$options = array('conditions' => array('Cv.' . $this->Cv->primaryKey => $id));
		$this->set('cv', $this->Cv->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cv->create();
			if ($this->Cv->save($this->request->data)) {
				$this->Session->setFlash(__('The cv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cv could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Cv->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cv->exists($id)) {
			throw new NotFoundException(__('Invalid cv'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cv->save($this->request->data)) {
				$this->Session->setFlash(__('The cv has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cv could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cv.' . $this->Cv->primaryKey => $id));
			$this->request->data = $this->Cv->find('first', $options);
		}
		$jobs = $this->Cv->Job->find('list');
		$this->set(compact('jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cv->id = $id;
		if (!$this->Cv->exists()) {
			throw new NotFoundException(__('Invalid cv'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cv->delete()) {
			$this->Session->setFlash(__('The cv has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cv could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
/**
 * doing sample CV adding 
 */
	public function saving_samples() {
		$data = array(
			'first_name' => 'Peter',
			'last_name' => 'Parker',
			'telephone' => '666777888',
			'email' => 'pparker@example.com',
			'bio' => 'His bio here...'
		);
		$this->Cv->create();
		//$saveResult = $this->Cv->save($data);
		//debug($saveResult);
		$complexData = array(
			'Cv' => array(
				'first_name' => 'SaveAll',
				'last_name' => 'Testing',
				'telephone' => '666777888',
				'email' => 'test@example.com',
				'bio' => 'Another bio...'
			),
			'Education' => array(
				array('name' => 'first', 'description' => 'first description'),
				array('name' => 'second', 'description' => 'second description'),
			)
		);
		
		debug($this->Cv->saveAssociated($complexData));

		$this->_stop();
	}
}
