<?php
class ContratosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Contrato','Usuario');

    public function index()
    {

        $contratos = $this->Contrato->find('all'); 
        $this->set(compact('contratos'));
        
    }

    public function nuevo()
    {
        if (!empty($this->data)) { 

            $this->Contrato->create(); 

            if ($this->Contrato->save($this->data)) { 

                $this->Session->setFlash('Contrato registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Contrato!'); 
            }

        }
    $dct = $this->Usuario->find('list', array('fields'=>'Usuario.nombre'));
     $this->set(compact('dct'));
    }

    public function modificar($id = null)
    {
        $this->Contrato->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro de contrato');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Contrato->read();

        } else {
            if ($this->Contrato->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    $dct = $this->Usuario->find('list', array('fields'=>'Usuario.nombre'));
     $this->set(compact('dct'));
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Contrato->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>