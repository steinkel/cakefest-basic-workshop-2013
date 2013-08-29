<?php
App::uses('AppController', 'Controller');
/**
 * Experiences Controller
 *
 * @property Experience $Experience
 * @property PaginatorComponent $Paginator
 */
class ExperiencesController extends AppController {

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
		$this->Experience->recursive = 0;
		$this->set('experiences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Experience->exists($id)) {
			throw new NotFoundException(__('Invalid experience'));
		}
		$options = array('conditions' => array('Experience.' . $this->Experience->primaryKey => $id));
		$this->set('experience', $this->Experience->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Experience->create();
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		}
		$cvs = $this->Experience->Cv->find('list');
		$this->set(compact('cvs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Experience->exists($id)) {
			throw new NotFoundException(__('Invalid experience'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Experience->save($this->request->data)) {
				$this->Session->setFlash(__('The experience has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Experience.' . $this->Experience->primaryKey => $id));
			$this->request->data = $this->Experience->find('first', $options);
		}
		$cvs = $this->Experience->Cv->find('list');
		$this->set(compact('cvs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Experience->id = $id;
		if (!$this->Experience->exists()) {
			throw new NotFoundException(__('Invalid experience'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Experience->delete()) {
			$this->Session->setFlash(__('The experience has been deleted.'));
		} else {
			$this->Session->setFlash(__('The experience could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
