<?php
App::uses('AppController', 'Controller');
/**
 * Tipoeventos Controller
 *
 * @property Tipoevento $Tipoevento
 * @property SessionComponent $Session
 */
class TipoeventosController extends AppController {

    public $layout = 'admin';
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session', 'Ajax', 'Javascript', 'Form');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipoevento->recursive = 0;
		$this->set('tipoeventos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tipoevento->id = $id;
		if (!$this->Tipoevento->exists()) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		$this->set('tipoevento', $this->Tipoevento->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipoevento->create();
			if ($this->Tipoevento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoevento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoevento could not be saved. Please, try again.'));
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
		$this->Tipoevento->id = $id;
		if (!$this->Tipoevento->exists()) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipoevento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipoevento has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoevento could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tipoevento->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
	
		$this->Tipoevento->id = $id;
		if (!$this->Tipoevento->exists()) {
			throw new NotFoundException(__('Invalid tipoevento'));
		}
		if ($this->Tipoevento->delete()) {
			$this->Session->setFlash(__('Tipoevento deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipoevento was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
