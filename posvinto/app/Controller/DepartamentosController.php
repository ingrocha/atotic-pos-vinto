<?php
class DepartamentosController extends AppController
{ 
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Departamento'); 
    public function index()
    {
        $departamentos = $this->Departamento->find('all'); 
        $this->set(compact('departamentos'));
    }
    public function nuevo()
    {
        if (!empty($this->data)) { 
            $this->Departamento->create(); 
            if ($this->Departamento->save($this->data)) { 
                $this->Session->setFlash('Departamento registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Departamento'); 
            }
        }
    }

    public function modificar($id = null)
    {
        $this->Departamento->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Departamento->read();
         } 
        else {
            if ($this->Departamento->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            }
            else {
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
        if ($this->Departamento->delete($id)) {
            $this->Session->setFlash('El Departamento  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>