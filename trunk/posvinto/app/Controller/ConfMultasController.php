<?php
class ConfMultasController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('ConfMulta'); 
    public function index()
    {

        $conf_multas = $this->ConfMulta->find('all'); 
        $this->set(compact('conf_multas'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->ConfMulta->create(); 

            if ($this->ConfMulta->save($this->data)) { 

                $this->Session->setFlash('Conf Multa registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar Conf Multa'); 
            }
            
        }
        
    }

    public function modificar($id = null)
    {
        $this->ConfMulta->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->ConfMulta->read();

        } else {
            if ($this->ConfMulta->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->ConfMulta->delete($id)) {
            
            $this->Session->setFlash('Conf Multa  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>