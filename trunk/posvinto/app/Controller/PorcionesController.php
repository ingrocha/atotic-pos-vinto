<?php
class PorcionesController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Porcion','Producto','Tipos_insumo'); 
    public function index()
    {

        $porciones = $this->Porcion->find('all'); 
        $this->set(compact('porciones'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Porcion->create(); 

            if ($this->Porcion->save($this->data)) { 

                $this->Session->setFlash('La Porcion esta registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Pedido!'); 
            }

        }
  $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
         $this->set(compact('dproducto'));
         
  $dtipinsumo = $this->Tipos_insumo->find('list', array('fields'=>'Tipos_insumo.nombre'));
        $this-> set(compact('dtipinsumo'));
    }

   
    public function modificar($id = null)
    {
        $this->Porcion->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Porcion->read();

        } else {
            if ($this->Porcion->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
  $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
         $this->set(compact('dproducto'));
         
  $dtipinsumo = $this->Tipos_insumo->find('list', array('fields'=>'Tipos_insumo.nombre'));
        $this-> set(compact('dtipinsumo'));
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Pedido->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>