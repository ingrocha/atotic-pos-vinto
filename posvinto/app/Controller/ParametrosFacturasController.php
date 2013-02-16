<?php
class ParametrosFacturasController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('ParametrosFactura'); 
    public $layout = 'vivavinto';
    public function index()
    {

        $parametrosfacturas = $this->ParametrosFactura->find('all'); 
        $this->set(compact('parametrosfacturas'));
        
    }

    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->ParametrosFactura->create(); 

            if ($this->ParametrosFactura->save($this->data)) { 

                $this->Session->setFlash('El Parametro Factura registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Parametro Factura'); 
            }
            
        }

    }

    public function modificar($id = null)
    {
        $this->ParametrosFactura->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->ParametrosFactura->read();

        } else {
            if ($this->ParametrosFactura->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
  //      $dperf = $this->Perfil->find('list', array('fields'=>'Perfil.nombre'));
  //     $this->set(compact('dperf'));
        
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->ParametrosFactura->delete($id)) {
            
            $this->Session->setFlash('El Parametro Factura  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>