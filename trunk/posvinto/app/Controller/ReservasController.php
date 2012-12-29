<?php
App::uses('AppController', 'Controller');
/**
 * Reservas Controller
 *
 * @property Reserva $Reserva
 */
class ReservasController extends AppController {

    public $layout = 'vivavinto';
    public $components = array('Session');
    public $uses = array('Reserva',  'Tipoevento', 'Cliente');
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Ajax', 'Javascript', 'Form', 'Html', 'Utilidades');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reserva->recursive = 0;
		$this->set('reservas', $this->paginate());  
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Reserva->id = $id;
		if (!$this->Reserva->exists()) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		$this->set('reserva', $this->Reserva->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {	   	  
       
		if ($this->request->is('post')) {
		   
           $hora = $this->data['Reserva']['Hora']['hour'];
           $min = $this->data['Reserva']['Hora']['min'];
           $fecha = $this->data['Reserva']['fecha'];
           $fechac = $fecha." ".$hora.":".$min;
           $reserva = $this->Reserva->find('first', array(
           'conditions'=>array('Reserva.fecha like'=>$fecha." %")
           ));
           //debug($reserva);exit;
           $this->request->data['Reserva']['fecha']=$fechac;
           //debug($this->data);exit;
           if(empty($reserva)){
            $this->Reserva->create();
			if ($this->Reserva->save($this->request->data)) {
				$this->Session->setFlash(__('La reserva fue guardada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo registrar. Por favor, intente mas tarde.'));
			}
           }else{
            $this->Session->setFlash(__('Ya hay una reserva en '.$fecha));
           }
			
		}
		$dcc = $this->Cliente->find('list', array('fields'=>array('Cliente.nombre')));
        //debug($dcc);
		$dct = $this->Tipoevento->find('list', array('fields'=>array('Tipoevento.nombre')));
        //debug($dct);
		$this->set(compact('dcc', 'dct'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Reserva->id = $id;
		if (!$this->Reserva->exists()) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reserva->save($this->request->data)) {
				$this->Session->setFlash(__('The reserva has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reserva could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Reserva->read(null, $id);
		}

        $dcc = $this->Cliente->find('list', array('fields'=>array('Cliente.nombre')));
        //debug($dcc);
		$dct = $this->Tipoevento->find('list', array('fields'=>array('Tipoevento.nombre')));
        //debug($dct);
		$this->set(compact('dcc', 'dct'));

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
		$this->Reserva->id = $id;
		if (!$this->Reserva->exists()) {
			throw new NotFoundException(__('Invalid reserva'));
		}
		if ($this->Reserva->delete()) {
			$this->Session->setFlash(__('Reserva deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reserva was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
