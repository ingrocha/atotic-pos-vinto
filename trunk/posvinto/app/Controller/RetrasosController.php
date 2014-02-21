<?php
App::uses('AppController', 'Controller');
/**
 * Retrasos Controller
 *
 * @property Retraso $Retraso
 * @property PaginatorComponent $Paginator
 */
class RetrasosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    public $layout = 'vivavinto';
    public $uses = array('Retraso','Asistencia','User');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Retraso->recursive = 0;
		$this->set('retrasos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Retraso->exists($id)) {
			throw new NotFoundException(__('Invalid retraso'));
		}
		$options = array('conditions' => array('Retraso.' . $this->Retraso->primaryKey => $id));
		$this->set('retraso', $this->Retraso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retraso->create();
			if ($this->Retraso->save($this->request->data)) {
				$this->Session->setFlash(__('The retraso has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retraso could not be saved. Please, try again.'));
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
		if (!$this->Retraso->exists($id)) {
			throw new NotFoundException(__('Invalid retraso'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Retraso->save($this->request->data)) {
				$this->Session->setFlash(__('The retraso has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retraso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Retraso.' . $this->Retraso->primaryKey => $id));
			$this->request->data = $this->Retraso->find('first', $options);
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
		$this->Retraso->id = $id;
		if (!$this->Retraso->exists()) {
			throw new NotFoundException(__('Invalid retraso'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Retraso->delete()) {
			$this->Session->setFlash(__('Retraso deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Retraso was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
?>