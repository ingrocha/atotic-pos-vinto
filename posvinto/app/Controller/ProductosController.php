<?php
class ProductosController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $uses = array('Producto', 'Categoria');
    public $layout = "admin";

    public function index()
    {

        $productos = $this->Producto->find('all');
        //debug($productos);exit;
        $this->set(compact('productos'));

    }

    public function platos()
    {

        $this->paginate = array('limit' => 6, 'order' => array('id' => 'desc'), 'recursive'=>0, 'conditions'=>array('Categoria.tipo'=>'Comida'));
        // similar to findAll(), but fetches paged results
        $platos = $this->paginate('Producto');
        //debug($platos);
        //print_r($platos);        
        $this->set(compact('platos'));

    }
    
    public function baja($id=null){
        
        
    }
    
    public function bebidas(){
        
        $this->paginate = array('limit' => 6, 'order' => array('id' => 'desc'), 'recursive'=>0, 'conditions'=>array('Categoria.tipo'=>'Bebidas'));
        // similar to findAll(), but fetches paged results
        $platos = $this->paginate('Producto');
        //debug($platos);
        //print_r($platos);        
        $this->set(compact('platos'));
        
    }
    
    public function nuevabebida(){
        
        if (!empty($this->data)) {
            //debug($this->data);
            $this->Producto->create();
            if($this->Producto->save($this->data)){
                $this->Session->setFlash('Plato registrado con exito');
                $this->redirect(array('action' => 'platos'), null, true);    
            }    
        }
        
        $dcc = $this->Categoria->find('list', array('conditions'=>array('tipo'=>'Bebidas'), 'fields'=>'nombre'));
            //debug($dcc);
        $this->set(compact('dcc'));    
    }
    
    public function nuevoplato(){
        
        if (!empty($this->data)) {
            //debug($this->data);
            $this->Producto->create();
            if($this->Producto->save($this->data)){
                $this->Session->setFlash('Plato registrado con exito');
                $this->redirect(array('action' => 'platos'), null, true);    
            }    
        }
        
        $dcc = $this->Categoria->find('list', array('conditions'=>array('tipo'=>'Comida'), 'fields'=>'nombre'));
            //debug($dcc);
        $this->set(compact('dcc')); 
    }

    public function nuevo()
    {

        if (!empty($this->data)) {

            $this->Producto->create();

            if ($this->Producto->save($this->data)) {

                $this->Session->setFlash('Producto registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);

            } else {

                $this->Session->setFlash('No se pudo registrar el Producto!');
            }
        }
    }

    public function modificar($id = null)
    {
        $this->Producto->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Producto->read();

        } else {
            if ($this->Producto->save($this->data)) {
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
        if ($this->Producto->delete($id)) {

            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>