<?php
App::uses('AppController', 'Controller');
/**
 * CvsJobs Controller
 *
 * @property CvsJob $CvsJob
 * @property PaginatorComponent $Paginator
 */
class CvsJobsController extends AppController {

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
		$this->CvsJob->recursive = 0;
		$this->set('cvsJobs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CvsJob->exists($id)) {
			throw new NotFoundException(__('Invalid cvs job'));
		}
		$options = array('conditions' => array('CvsJob.' . $this->CvsJob->primaryKey => $id));
		$this->set('cvsJob', $this->CvsJob->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CvsJob->create();
			if ($this->CvsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The cvs job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cvs job could not be saved. Please, try again.'));
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
		if (!$this->CvsJob->exists($id)) {
			throw new NotFoundException(__('Invalid cvs job'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CvsJob->save($this->request->data)) {
				$this->Session->setFlash(__('The cvs job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cvs job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CvsJob.' . $this->CvsJob->primaryKey => $id));
			$this->request->data = $this->CvsJob->find('first', $options);
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
		$this->CvsJob->id = $id;
		if (!$this->CvsJob->exists()) {
			throw new NotFoundException(__('Invalid cvs job'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CvsJob->delete()) {
			$this->Session->setFlash(__('The cvs job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cvs job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
