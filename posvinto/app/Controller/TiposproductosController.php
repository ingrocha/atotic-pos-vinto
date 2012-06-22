<?php
class TiposproductosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Tiposproducto'); 

    public function index()
    {

        $tiposproductos = $this->Tiposproducto->find('all'); 
        $this->set(compact('tiposproductos'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Tiposproducto->create(); 

            if ($this->Tiposproducto->save($this->data)) { 

                $this->Session->setFlash('Producto registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar!'); 
            }

        }
    }

    public function modificar($id = null)
    {
        $this->Tiposproducto->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Tiposproducto->read();

        } else {
            if ($this->Tiposproducto->save($this->data)) {
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
        if ($this->Tiposproducto->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>