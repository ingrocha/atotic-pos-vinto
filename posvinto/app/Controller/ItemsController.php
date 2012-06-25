<?php
class ItemsController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Item','PedidosMesa','Producto'); 
    public function index()
    {

        $items = $this->Item->find('all'); 
        $this->set(compact('items'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Item->create(); 

            if ($this->Item->save($this->data)) { 

                $this->Session->setFlash('Item registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Item'); 
            }
            
        }
  $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
   $this->set(compact('dproducto'));
    
       }

    public function modificar($id = null)
    {
        $this->Item->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Item->read();

        } else {
            if ($this->Item->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
     $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
     $this->set(compact('dproducto'));     
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Item->delete($id)) {
            
            $this->Session->setFlash('El Item  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>
