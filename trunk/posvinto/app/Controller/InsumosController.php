<?php
class InsumosController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $uses = array('Insumo', 'Almacen');
    public $layout = 'admin';

    public function index()
    {
        $this->paginate = array('limit' => 6, 'order' => array('Insumo.id' => 'desc'));
        // similar to findAll(), but fetches paged results
        $insumos = $this->paginate('Insumo');
        $this->set(compact('insumos'));
        //$insumos = $this->Insumo->find('all');
        //$this->set(compact('insumos'));

    }
    
    public function salidalmacen($id=null){        
                
        $this->layout='ajax';                
        if (!empty($this->data)) {
            
            $cant_entrada = $this->data['Movimiento']['entrada'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo=$this->Almacen->find('first', array('conditions'=>array('insumo_id'=>$id_insumo), 'order'=>'id DESC', 'recursive'=>-1));
            //debug($existe_insumo);exit;
            if($existe_insumo){
                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior + $cant_entrada;
                $this->data="";                
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id']=$id_insumo;
                $this->request->data['Almacen']['preciocompra']=$pc;
                $this->request->data['Almacen']['ingreso']=$cant_entrada;
                $this->request->data['Almacen']['total']=$cant_actual;
                $this->request->data['Almacen']['fecha']=$fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if($this->Almacen->save($this->data)){
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action'=>'index'));
                }                       
            }else{
                $this->data="";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id']=$id_insumo;
                $this->request->data['Almacen']['preciocompra']=$pc;
                $this->request->data['Almacen']['ingreso']=$cant_entrada;
                $this->request->data['Almacen']['total']=$cant_entrada;
                $this->request->data['Almacen']['fecha']=$fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if($this->Almacen->save($this->data)){
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action'=>'index'));
                }
            }
            //debug($this->data);        
        }else{
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions'=>array('id'=>$id), 'recursive'=>-1));            
            //debug($insumo);
            $this->set(compact('insumo'));
        }        
    }
    
    public function ingresoalmacen($id=null){        
                
        $this->layout='ajax';                
        if (!empty($this->data)) {
            
            $cant_entrada = $this->data['Movimiento']['entrada'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo=$this->Almacen->find('first', array('conditions'=>array('insumo_id'=>$id_insumo), 'order'=>'id DESC', 'recursive'=>-1));
            //debug($existe_insumo);exit;
            if($existe_insumo){
                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior + $cant_entrada;
                $this->data="";                
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id']=$id_insumo;
                $this->request->data['Almacen']['preciocompra']=$pc;
                $this->request->data['Almacen']['ingreso']=$cant_entrada;
                $this->request->data['Almacen']['total']=$cant_actual;
                $this->request->data['Almacen']['fecha']=$fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if($this->Almacen->save($this->data)){
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action'=>'index'));
                }                       
            }else{
                $this->data="";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id']=$id_insumo;
                $this->request->data['Almacen']['preciocompra']=$pc;
                $this->request->data['Almacen']['ingreso']=$cant_entrada;
                $this->request->data['Almacen']['total']=$cant_entrada;
                $this->request->data['Almacen']['fecha']=$fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if($this->Almacen->save($this->data)){
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action'=>'index'));
                }
            }
            //debug($this->data);        
        }else{
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions'=>array('id'=>$id), 'recursive'=>-1));            
            //debug($insumo);
            $this->set(compact('insumo'));
        }        
    }

    public function nuevo()
    {
        $fecha = date("Y-m-d");
        if (!empty($this->data)) {
            $this->request->data['Insumo']['fecha']=$fecha;
            $this->Insumo->create();
            if ($this->Insumo->save($this->data)) {
                $this->Session->setFlash('Insumo registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('No se pudo registrar el Insumo');
            }
        }
        //$dct = $this->TiposInsumo->find('list', array('fields' => 'TiposInsumo.nombre'));
        //$this->set(compact('dct', 'options'));
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