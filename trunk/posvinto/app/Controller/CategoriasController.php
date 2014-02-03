<?php
class CategoriasController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $uses = array('Categoria','Clase','Producto','Insumo'); 
    public $components = array('Session');
    public $layout = 'vivavinto';
    
    public function index()
    {

        $categorias = $this->Categoria->find('all', array('recursive'=>-1)); 
        //debug($categorias);exit;
        $this->set(compact('categorias'));
        
    }
  public function nuevo()
    {
        
        if (!empty($this->request->data)) { 

            $this->Categoria->create(); 

            if ($this->Categoria->save($this->request->data)) { 
                //debug($this->request->data);exit;
                $this->Session->setFlash('Ingreso registrado con exito!', 'alerts/bueno');
                //$this->Session->setFlash('Categoria registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar la Categoria'); 
            }
            
        } 
      $dclase = $this->Clase->find('list',array('fields'=>'Clase.nombre'));
      $dproductos = $this->Producto->find('list',array('fields'=>'Producto.nombre'));
      $dinsumo= $this->Insumo->find('list',array('fields'=>'Insumo.nombre'));
      $dtipo = array('Comida' => 'Comida', 'Bebidas' => 'Bebidas');
      $this->set(compact('dct','dtipo','dproductos','dinsumo','dclase'));    
        
    }

    public function modificar($id = null)
    {
        $this->Categoria->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Categoria->read();

        } else {
            if ($this->Categoria->save($this->data)) {
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
        if ($this->Categoria->delete($id)) {
            
            $this->Session->setFlash('La Categoria  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>