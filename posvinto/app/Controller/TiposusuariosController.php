<?php
class TiposusuariosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Tiposusuario'); 
    public function index()
    {

        $tiposusuarios = $this->Tiposusuario->find('all'); 
        $this->set(compact('tiposusuarios'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Tiposusuario->create(); 

            if ($this->Tiposusuario->save($this->data)) { 

                $this->Session->setFlash('Se ha registrado el usuario con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el tipo de usuario!'); 
            }

        }
    }

    public function modificar($id = null)
    {
        $this->Tiposusuario->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Tiposusuario->read();

        } else {
            if ($this->Tiposusuario->save($this->data)) {
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
        if ($this->Tiposusuario->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>