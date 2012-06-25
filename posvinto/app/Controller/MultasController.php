<?php
class MultasController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Multa','Usuario'); 
    public function index()
    {

        $multas = $this->Multa->find('all'); 
        $this->set(compact('multas'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Multa->create(); 

            if ($this->Multa->save($this->data)) { 

                $this->Session->setFlash('Se ha registrado la Multa con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el tipo de multa!'); 
            }

        }
       $dmulta = $this->Usuario->find('list', array('fields'=>'Usuario.nombre'));
        $this->set(compact('dmulta'));
        //debug($dct);
    }

    public function modificar($id = null)
    {
        $this->Multa->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Multa->read();

        } else {
            if ($this->Multa->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
     $dmulta = $this->Usuario->find('list', array('fields'=>'Usuario.nombre'));
        $this->set(compact('dmulta'));
        //debug($dct);
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Multa->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>