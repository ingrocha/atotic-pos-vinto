<?php
class ProductosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Producto'); 
    public function index()
    {

        $productos = $this->Producto->find('all'); 
        $this->set(compact('productos'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Producto->create(); 

            if ($this->Producto->save($this->data)) { 

                $this->Session->setFlash('Producto registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Producto!'); 
            }
        }
    }

    public function modificar($id = null)
    {
        $this->Producto->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Producto->read();

        } else {
            if ($this->Producto->save($this->data)) {
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
        if ($this->Producto->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>