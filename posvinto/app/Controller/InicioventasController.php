<?php
class InicioventasController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Inicioventa','Insumo'); 
    public function index()
    {

        $inicioventas = $this->Inicioventa->find('all'); 
        $this->set(compact('inicioventas'));
       // debug($inicioventas);
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Inicioventa->create(); 

            if ($this->Inicioventa->save($this->data)) { 

                $this->Session->setFlash('Inicio de la Venta registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Inicio ventas'); 
            }
            
        }
    $dinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
      $this->set(compact('dinsumo'));
        }

    public function modificar($id = null)
    {
        $this->Inicioventa->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Inicioventa->read();

        } else {
            if ($this->Inicioventa->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
      $dinsumo = $this->Insumo->find('list', array('fields'=>'Insumo.nombre'));
      $this->set(compact('dinsumo'));   
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Inicioventa->delete($id)) {
            
            $this->Session->setFlash('El Inicio de una Venta ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>