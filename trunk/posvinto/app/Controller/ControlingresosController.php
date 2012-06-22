<?php
class ControlingresosController extends AppController{
    public $uses= array('Bodega', 'Movimientosinsumo', 'Insumo');
    public $layout = 'admin';
    public function index(){
        $data = $this->paginate('Movimientosinsumo', array('limit'=>20));    
        $this->set('datos', $data);
    }
    public function ingresar(){
        if(!empty($this->data)){
          
            $movimiento=$this->Movimientosinsumo->find('first', array('conditions'=>array('Movimientosinsumo.insumo_id'=>$this->data['Movimientosinsumo']['insumo_id']), 'order'=>array('Movimientosinsumo.id DESC')));
            debug($movimiento);exit;
            $fecha =date('Y-m-d');
            if($movimiento['Movimientosinsumo']['fecharegistro']== $fecha){
                $ingreso=$movimiento['Movimientosinsumo']['ingreso'] + $this->data['Movimientosinsumo']['ingreso'];
                $salida=$movimiento['Movimientosinsumo']['salida'];
                $total=$movimiento['Movimientosinsumo']['total'] + $this->data['Movimientosinsumo']['ingreso'];
            }else{
                $ingreso=$this->data['Movimientosinsumo']['ingreso'];
                $salida=0;
                $total= $movimiento['Movimientosinsumo']['total'] + $this->data['Movimientosinsumo']['ingreso'];
            }
            $this->request->data['Movimientosinsumo']['ingreso']= $ingreso;
            $this->request->data['Movimientosinsumo']['salida']=$salida;
            $this->request->data['Movimientosinsumo']['total']= $total;
            $this->request->data['Movimientosinsumo']['fecharegistro']=$fecha;
            $this->request->data['Movimientosinsumo']['usuario_id']='1111';
            if($this->Movimientosinsumo->save($this->data)){
                $this->Session->setFlash('Ingreso del insumo'.$movimiento['Insumo']['nombre'].' registrado satisfactoriamente!');
                $this->redirect(array('action' => 'index'));
            }
        }
        $this->set('insumos', $this->Insumo->find('list', array('fields'=>array('Insumo.nombre'))));
    }
}
?>