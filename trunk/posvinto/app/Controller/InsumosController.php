<?php
class InsumosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Insumo','TiposInsumo'); 
    public $layout = 'admin';
    
    public function index()
    {

        $insumos = $this->Insumo->find('all'); 
        $this->set(compact('insumos'));
        
    }

   public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Insumo->create(); 

            if ($this->Insumo->save($this->data)) { 

                $this->Session->setFlash('Insumos registrados con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Insumo'); 
            }
            
        }
        
        $dct = $this->TiposInsumo->find('list', array('fields'=>'TiposInsumo.nombre'));
        $this->set(compact('dct', 'options'));
        //debug($dct);
    }

    public function modificar($id = null)
    {
        $this->Insumo->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Insumo->read();

        } else {
            if ($this->Insumo->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
  $dct = $this->TiposInsumo->find('list', array('fields'=>'TiposInsumo.nombre'));
        $this->set(compact('dct', 'options'));
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Insumo->delete($id)) {
            
            $this->Session->setFlash('El Insumo  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>