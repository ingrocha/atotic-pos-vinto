<?php
class PerfilesController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Perfil'); 
    public function index()
    {

        $perfiles = $this->Perfil->find('all'); 
        $this->set(compact('perfiles'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Perfil->create(); 

            if ($this->Perfil->save($this->data)) { 

                $this->Session->setFlash('Se ha registrado el Perfil con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el tipo de perfil!'); 
            }

        }
    }

    public function modificar($id = null)
    {
        $this->Perfil->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Perfil->read();

        } else {
            if ($this->Perfil->save($this->data)) {
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
        if ($this->Perfil->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>