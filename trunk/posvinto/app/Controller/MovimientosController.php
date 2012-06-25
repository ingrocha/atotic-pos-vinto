<?php
class MovimientosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Movimiento','Producto','Insumo'); 
    public function index()
    {

        $movimientos = $this->Movimiento->find('all'); 
        $this->set(compact('movimientos'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Movimiento->create(); 

            if ($this->Movimiento->save($this->data)) { 

                $this->Session->setFlash('Movimiento registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Movimiento!'); 
            }

        }
      $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
             $this->set(compact('dproducto'));
      
     $dinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
             $this->set(compact('dinsumo'));       
    }

    public function modificar($id = null)
    {
        $this->Movimiento->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Movimiento->read();

        } else {
            if ($this->Movimiento->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
   $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
             $this->set(compact('dproducto'));
      
     $dinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
             $this->set(compact('dinsumo')); 
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Movimiento->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>