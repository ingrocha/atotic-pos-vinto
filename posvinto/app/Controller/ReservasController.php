<?php

App::uses('AppController', 'Controller');

/**
 * Reservas Controller
 *
 * @property Reserva $Reserva
 */
class ReservasController extends AppController
{

    public $layout = 'vivavinto';
    public $components = array('Session', 'Fechasconvert');
    public $uses = array(
        'Reserva',
        'Tipoevento',
        'Cliente');

    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array(
        'Ajax',
        'Javascript',
        'Form',
        'Html',
        'Utilidades');

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Reserva->recursive = 0;
        $this->set('reservas', $this->paginate());
    }
    public function listareservas($id = null)
    {
        $this->Reserva->recursive = 0;
        $this->set('reservas', $this->paginate());
    }
     public function ver($idreserva=nulls)
    {
        $reservas = $this->Reserva->find('first', array(
            'recursive' => -0,
            'order' => 'Reserva.id',
            'conditions'=>array('Reserva.id'=>$idreserva)));
        $this->set(compact('reservas'));
        //debug($reservas);die;
    }
    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->Reserva->id = $id;
        if (!$this->Reserva->exists())
        {
            throw new NotFoundException(__('Invalid reserva'));
        }
        $this->set('reserva', $this->Reserva->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {

        if ($this->request->is('post'))
        {
            //debug($this->request->data);
            $hora = $this->data['Reserva']['hora']['hour'];
            $min = $this->data['Reserva']['hora']['min'];
            $fecha = $this->data['Reserva']['fecha'];
            $fechaConvertida = $this->Fechasconvert->doFechaInvertida($fecha);
            $horaConvertida = $hora . ":" . $min;
            //debug($fechaConvertida);
            //exit;
            $reserva = $this->Reserva->find('first', array('conditions' => array('Reserva.fecha like' => $fecha)));
            //debug($reserva);exit;
            $this->request->data['Reserva']['fecha'] = $fechaConvertida;
            $this->request->data['Reserva']['hora'] = $horaConvertida;
            //debug($this->request->data);exit;
            if (empty($reserva))
            {
                $this->Reserva->create();
                if ($this->Reserva->save($this->request->data))
                {
                    $this->Session->setFlash(__('La reserva fue guardada'));
                    $this->redirect(array('action' => 'index'));
                } else
                {
                    $this->Session->setFlash(__('No se pudo registrar. Por favor, intente mas tarde.'));
                }
            } else
            {
                $this->Session->setFlash(__('Ya hay una reserva en ' . $fecha));
            }
        }
        $dcc = $this->Cliente->find('list', array('fields' => array('Cliente.nombre')));
        //debug($dcc);
        $dct = $this->Tipoevento->find('list', array('fields' => array('Tipoevento.nombre')));
        //debug($dct);
        $this->set(compact('dcc', 'dct'));

        $dcliente = $this->Cliente->find('list', array('fields' => 'Cliente.nombre'));
        $this->set(compact('dcliente'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->Reserva->id = $id;
        if (!$this->Reserva->exists())
        {
            throw new NotFoundException(__('Invalid reserva'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            if ($this->Reserva->save($this->request->data))
            {
                $this->Session->setFlash(__('The reserva has been saved'));
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash(__('The reserva could not be saved. Please, try again.'));
            }
        } else
        {
            $this->request->data = $this->Reserva->read(null, $id);
        }

        $dcc = $this->Cliente->find('list', array('fields' => array('Cliente.nombre')));
        //debug($dcc);
        $dct = $this->Tipoevento->find('list', array('fields' => array('Tipoevento.nombre')));
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
    public function delete($id = null)
    {
        $this->Reserva->id = $id;
        $this->request->data = $this->Reserva->read();
        if (!$id)
        {
            $this->Session->setFlash('No existe la Reserva a Eliminar');
            $this->redirect(array('action' => 'index'));
        } else
        {
            if ($this->Reserva->delete($id))
            {
                $this->Session->setFlash('Se elimino la Reserva ','alerts/bueno');
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }

}
?>
