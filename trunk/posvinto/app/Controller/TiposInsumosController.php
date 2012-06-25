<?php
class TiposInsumosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('TiposInsumo'); 
    public function index()
    {

        $tipos_insumos = $this->TiposInsumo->find('all'); 
        $this->set(compact('tipos_insumos'));
        
    }

public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->TiposInsumo->create(); 

            if ($this->TiposInsumo->save($this->data)) { 

                $this->Session->setFlash('Tipos Insumos registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Tipo Insumo'); 
            }
            
        }
        
        $dtipos = $this->TiposInsumo->find('list', array('fields'=>'TiposInsumo.nombre'));
        $this->set(compact('dtipos'));
        
    }

    public function modificar($id = null)
    {
        $this->TiposInsumo->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->TiposInsumo->read();

        } else {
            if ($this->TiposInsumo->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dtipos = $this->TiposInsumo->find('list', array('fields'=>'TiposInsumo.nombre'));
        $this->set(compact('dtipos'));
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->TiposInsumo->delete($id)) {
            
            $this->Session->setFlash('El Insumo  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>