<?php
class ProductosController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $uses = array('Producto', 'Categoria', 'Porcione', 'Insumo', 'Almacen');
    public $layout = "admin";

    public function index()
    {

        $productos = $this->Producto->find('all');
        //debug($productos);exit;
        $this->set(compact('productos'));

    }
    
    public function receta($id=null){
        
        $rec=$this->Porcione->find('all', array('conditions'=>array('producto_id'=>$id)));
        $id_plato=$id;
        $this->set(compact('rec', 'id_plato'));
        //debug($rec);    
        
    }
    
    public function elimporcionplato($id_porcione=null, $id_producto){
        
        if (!$id_porcione) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'receta', $id_producto));
        }
        if ($this->Porcione->delete($id_porcione)) {

            $this->Session->setFlash('Insumo eliminado');
            $this->redirect(array('action' => 'receta', $id_producto));
        }    
    }
    
    public function nuevaporcion($id_plato=null){
        
        if(!empty($this->data)){
            //debug($this->data);exit;
            $this->Porcione->create();
            if($this->Porcione->saveMany($this->data)){
                $this->Session->setFlash('Plato registrado con exito');
                $this->redirect(array('action' => 'receta', $id_plato));     
            }else{
                $this->Session->setFlash('No se pudo guardar');
                //$this->redirect(array('action' => 'receta'), $id_plato);
            }    
        }else{
            
        }
        $dci = $this->Insumo->find('list', array('fields' => array('nombre')));            
        $plato=$this->Producto->find('first', array('conditions'=>array('id'=>$id_plato), 'recursive'=>-1));
        $this->set(compact('plato', 'dci'));
        //debug($plato);
    }

    public function platos()
    {

        $this->paginate = array('limit' => 6, 'order' => array('id' => 'desc'), 'recursive'=>0, 'conditions'=>array('Categoria.tipo'=>'Comida', 'estado'=>1));
        // similar to findAll(), but fetches paged results
        $platos = $this->paginate('Producto');
        //debug($platos);
        //print_r($platos);        
        $this->set(compact('platos'));

    }
    
    public function eliminarplato($id=null){
        
        $this->request->data['Producto']['estado']=0;
        $this->Producto->id = $id;
        if($this->Producto->save($this->data)){
            $this->Session->setFlash('Plato eliminado');
            $this->redirect(array('action' => 'platos'));    
        }    
        
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
        
        $fecha = date("Y-m-d");
        if (!empty($this->data)) {
            $datos_insumo=array();
            $datos_insumo=$this->data;
            //debug($this->data);exit;
            $cantidad = $datos_insumo['Producto']['cantidad'];
            $preciocompra = $datos_insumo['Producto']['precio'];
            $this->Producto->create();
            if($this->Producto->save($this->data)){
                $id_producto =  $this->Producto->getLastInsertID();
                $this->data="";
                $this->request->data['Insumo']['nombre'] = $datos_insumo['Producto']['nombre'];  
                $this->request->data['Insumo']['preciocompra'] = $datos_insumo['Producto']['precio'];  
                $this->request->data['Insumo']['precioventa'] = $datos_insumo['Producto']['precioventa'];
                $this->request->data['Insumo']['total'] = $cantidad;
                $this->request->data['Insumo']['fecha'] = $fecha;
                
                $this->Insumo->create();
                if($this->Insumo->save($this->data)){
                    
                    $this->data="";
                    $id_insumo =  $this->Insumo->getLastInsertID();
                    $this->request->data['Porcione']['producto_id'] = $id_producto;
                    $this->request->data['Porcione']['insumo_id'] = $id_insumo;
                    $this->request->data['Porcione']['cantidad'] = 1;
                    $this->Porcione->create();
                    
                    if($this->Porcione->save($this->data)){
                        $this->Session->setFlash('Bebida registrada con exito');
                        //$this->redirect(array('action' => 'bebidas'), null, true);    
                    }   
                    
                    $this->data="";
                    $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                    $this->request->data['Almacen']['preciocompra'] = $preciocompra;
                    $this->request->data['Almacen']['ingreso'] = $cantidad;
                    $this->request->data['Almacen']['total'] = $cantidad;
                    $this->request->data['Almacen']['fecha'] = $fecha; 
                    $this->Almacen->create();
                    if($this->Almacen->save($this->data)){
                        $this->Session->setFlash('Bebida registrada con exito');
                        $this->redirect(array('action' => 'bebidas'), null, true);    
                    }
                                    
                    //debug($this->data);exit;                            
                }
                
                //debug($this->data);
                //$this->Session->setFlash('Plato registrado con exito');
                //$this->redirect(array('action' => 'platos'), null, true);    
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
                $this->redirect(array('action' => 'bebidas'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dcc = $this->Categoria->find('list', array('conditions'=>array('tipo'=>'Bebidas'), 'fields'=>'nombre'));
            //debug($dcc);
        $this->set(compact('dcc'));   
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