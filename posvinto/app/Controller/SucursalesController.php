<?php
class SucursalesController extends AppController
{ 
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Sucursal','Departamento'); 
    public function index()
    {
        $sucursales = $this->Sucursal->find('all'); 
        $this->set(compact('sucursales'));
    }
    public function nuevo()
    {
        if (!empty($this->data)) { 
            $this->Sucursal->create(); 
            if ($this->Sucursal->save($this->data)) { 
                $this->Session->setFlash('Sucursal registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } 
            else { 
                $this->Session->setFlash('No se pudo registrar la Sucursal'); 
            }
         }
      $dpart = $this->Departamento->find('list', array('fields'=>'Departamento.nombre'));
      $this->set(compact('dpart'));
    }

    public function modificar($id = null)
    {
        $this->Sucursal->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Sucursal->read();

        } else {
            if ($this->Sucursal->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dpart = $this->Departamento->find('list', array('fields'=>'Departamento.nombre'));
        $this->set(compact('dpart'));
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Sucursal->delete($id)) {
            
            $this->Session->setFlash('La Sucursal  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>