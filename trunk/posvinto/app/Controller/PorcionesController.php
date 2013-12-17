<?php
class PorcionesController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Porcione','Producto','Insumo'); 
    public $layout = 'vivavinto';
    
    public function index()
    {
        $porciones = $this->Porcione->find('all', array('order' => 'Insumo.id DESC')); 
        $this->set(compact('porciones'));
        //debug($porciones);exit;
        
    }

    public function insertar()
    {
        
        if (!empty($this->data)) { 

            $this->Porcione->create(); 

            if ($this->Porcione->save($this->data)) { 

                $this->Session->setFlash('La Porcion esta registrada con Exito...!!!','alerts/bueno'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Pedido!'); 
            }

        }
        $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
        $this->set(compact('dproducto'));
         
        $dtipinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
        $this-> set(compact('dproducto','dtipinsumo'));
    }

   
    public function editar($id = null)
    {
        $this->Porcione->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Porcione->read();

        } else {
            if ($this->Porcione->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados Exitosamente...!!!','alerts/bueno');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dproducto = $this->Producto->find('list', array('fields'=>'Producto.nombre'));
        $this->set(compact('dproducto'));
         
        $dtipinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
        $this-> set(compact('dproducto','dtipinsumo'));
    }

    function eliminar($id=null){
        $this->Porcione->id=$id;
        $this->data=$this->Porcione->read();
        if(!$id){
            $this->Session->setFlash('No existe la Porcion a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Porcione->delete($id)){
                $this->Session->setFlash('Se elimino la Porcion Exitosamente','alerts/bueno');
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}
?>