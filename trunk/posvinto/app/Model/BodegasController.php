<?php
App::uses('AppController', 'Controller');
/**
 * Bodegas Controller
 *
 * @property Bodega $Bodega
 * @property SessionComponent $Session
 */
class BodegasController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Ajax');
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
		$this->Bodega->recursive = 0;
		$this->set('bodegas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		$this->set('bodega', $this->Bodega->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bodega->create();
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Bodega->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bodega->read(null, $id);
		}
		$productos = $this->Bodega->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		if ($this->Bodega->delete()) {
			$this->Session->setFlash(__('Bodega deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bodega was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Bodega->recursive = 0;
		$this->set('bodegas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		$this->set('bodega', $this->Bodega->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Bodega->create();
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Bodega->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bodega->save($this->request->data)) {
				$this->Session->setFlash(__('The bodega has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bodega could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bodega->read(null, $id);
		}
		$productos = $this->Bodega->Producto->find('list');
		$this->set(compact('productos'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Bodega->id = $id;
		if (!$this->Bodega->exists()) {
			throw new NotFoundException(__('Invalid bodega'));
		}
		if ($this->Bodega->delete()) {
			$this->Session->setFlash(__('Bodega deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bodega was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
