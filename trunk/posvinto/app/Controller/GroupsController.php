<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 */
class GroupsController extends AppController {
    public $layout = 'pizza';

/**
 * index method
 *
 * @return void
 */
    
     public function beforeFilter()
    {
        parent::beforeFilter();
        //$this->Auth->allow('*');
    }
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('El perfil ha sido guardado!'), 'msgbueno');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El perfil no pudo guardarse. Por favor, intente de nuevo.'));
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Perfil invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('El Perfil fue guardado'), 'msgbueno');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('EL perfil no pudo guardarse. Por favor, intente nuevamente.'), 'msgalert');
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
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
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Perfil invalido'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('Perfil eliminado'), 'msgbueno');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El perfil no fue eliminado'), 'msgalert');
		$this->redirect(array('action' => 'index'));
	}
}
