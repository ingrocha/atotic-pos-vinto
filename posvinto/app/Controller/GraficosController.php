<?php

class GraficosController extends AppController
{ //declaramos la clase controller para se usada con los beneficios del papa controller

    public $helpers = array(
        'Html',
        'Form',
        'FlashChart'); //definimos que ayudantes vamos a usar
    public $uses = array(
        'Cliente',
        'Pedido',
        'Item',
        'Utilidades',
        'Bodega',
        'Insumo', 
        'Usuario', 
        'Almacen'
        ); //definimos las tablas que vamos a utilizar
    public $layout = 'admin';

    public function genera()
    {

    }

    public function insumoshoy()
    {       
        $hoy = date('Y-m-d');
        
        $insumos= $this->Bodega->find('all', array(
        'fields'=>array('sum(Bodega.salida) as salidas', 'sum(Bodega.ingreso) as ingresos', 'Insumo.nombre', 'Insumo.id'), 
        'group'=>array('Bodega.insumo_id')
        ));
        
        $this->set(compact('insumos'));
    }

    public function ventashoy()
    {

        //$hoy = date('d-m-Y');
        $hoy = date('Y-m-d');
        //echo $hoy;
        App::uses('CakeTime', 'Utility');
        $fecha_hoy = CakeTime::dayAsSql($hoy, 'Item.fecha');
       // echo $fecha_hoy;exit;
        $ventas = $this->Item->find('all', array(
            'recursive' => 0,
            'fields' => array('Producto.id, SUM(Item.cantidad) as total, SUM(Item.precio) as precio, Producto.nombre'),
            'group' => array('Item.producto_id'),
            'conditions' => array($fecha_hoy)));
        $this->set(compact('ventas'));
        //debug($ventas);
    }
    public function formreporte(){
       $this->set('mozos', $this->Usuario->find('list', array('conditions' => array('Usuario.perfile_id' =>
                        2), 'fields' => array('Usuario.nombre'))));
    }
    function ventasfechas(){
        if (!empty($this->data)) {
            //debug($this->data);exit;
            $a=0;
            
            
       // echo $fecha_hoy;exit;
            
            $condiciones = "SELECT `Producto`.`id`, sum(Item.cantidad) as total, SUM(Item.precio) as precio, Producto.nombre 
            FROM `sisvinto`.`items` AS `Item` 
            LEFT JOIN `sisvinto`.`productos` AS `Producto`
            ON (`Item`.`producto_id` = `Producto`.`id`)
            WHERE 1
            ";
            
            if (!empty($this->data['Pedido']['fecha_desde']) and !empty($this->data['Pedido']['fecha_hasta'])){
                $fecha1 = $this->data['Pedido']['fecha_desde']." 00:00:00";
                $fecha2 = $this->data['Pedido']['fecha_hasta']." 23:59:59";
                
                $condiciones .= "
                AND (Item.fecha >= '$fecha1')
                AND (Item.fecha <= '$fecha2')
                ";
                $a++;
            }else{
                $this->Session->setFlash(__('Debe ingresar las dos fechas!!!!'));
            }
            
            $condiciones .= " GROUP BY(Item.producto_id)";
            //debug($condiciones);exit;
            if ($a == 0) {
                $this->Session->setFlash(__('Debe ingresar al menos un dato!!!!'));
                $this->redirect(array('action' => 'formreporte'));
            }
            $ventas = $this->Pedido->query($condiciones);
            //debug($pedidos);
            $this->set(compact('ventas', 'fecha1', 'fecha2'));
        }else{
            $this->Session->setFlash("Debe introducir al menos un parametro de busqueda");
            $this->Session->redirect(array('action'=>'formreporte'));
        }
    }
    function forminsumos(){
        
    }
    function insumosfechas(){
        if(!empty($this->data)){
           // debug($this->data);
            $fecha1 = $this->data['Cliente']['fecha_desde'];
            $fecha2 = $this->data['Cliente']['fecha_hasta'];
            
            $insumos= $this->Bodega->find('all', array(
        'conditions'=>array('Bodega.fecha >='=>$fecha1, 'Bodega.fecha <='=>$fecha2),
        'fields'=>array('sum(Bodega.salida) as salidas', 'sum(Bodega.ingreso) as ingresos', 'Insumo.nombre', 'Insumo.id'), 
        'group'=>array('Bodega.insumo_id')
        ));
        
        $this->set(compact('insumos'));
        }else{
            $this->Session->setFlash("Debe introducir al menos un parametro de busqueda");
            $this->Session->redirect(array('action'=>'forminsumos'));
        }
    }
    function formalmacen(){
        
    }
    function almacenfechas(){
        if(!empty($this->data)){
        // debug($this->data);
        
            $fecha1 = $this->data['Cliente']['fecha_desde'];
            $fecha2 = $this->data['Cliente']['fecha_hasta'];
            if(!empty($fecha1) and !empty($fecha2)){
            $insumos= $this->Almacen->find('all', array(
            'conditions'=>array('Almacen.fecha >='=>$fecha1, 'Almacen.fecha <='=>$fecha2),
            'fields'=>array('sum(Almacen.salida) as salidas', 'sum(Almacen.ingreso) as ingresos', 'Insumo.nombre', 'Insumo.id'), 
            'group'=>array('Almacen.insumo_id')
            ));
            //debug($insumos);exit;
            $this->set(compact('insumos'));    
            }else{
              $this->Session->setFlash(__("Debe introducir las dos fechas"));  
            }    
        
        }else{
            $this->Session->setFlash(__("Debe introducir las dos fechas"));
        }
    }
    public function almacenhoy()
    {       
        $hoy = date('Y-m-d');
        $insumos= $this->Almacen->find('all', array(
            'fields'=>array('sum(Almacen.salida) as salidas', 'sum(Almacen.ingreso) as ingresos', 'Insumo.nombre', 'Insumo.id'), 
            'group'=>array('Almacen.insumo_id')
            ));
        
        
        $this->set(compact('insumos'));
    }
}
