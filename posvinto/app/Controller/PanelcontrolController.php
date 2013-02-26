<?php
class PanelcontrolController  extends AppController {
   public $helpers = array(
        'Form',
        'Html'      
    );
    //public $components = array('Session');
    public $layout = 'vivavinto'; 
    public $uses = array('Pedido', 'Item');
    
    function beforeFilter(){
       //$this->checksession();
       parent::beforeFilter();
       $this->Auth->allow('*');
    }
    
    public function index(){
        
    }
    
    public function admin()
    {
        
        App::uses('CakeTime', 'Utility');
        $fecha = date("Y-m-d");
        //$fechaTodoElDia = CakeTime::dayAsSql($fecha, null);
        
        $pedidosHoy = $this->Pedido->find('all', array(
            'recursive'=>-1,
            'conditions'=>(CakeTime::dayAsSql($fecha, 'Pedido.fecha'))
        ));                        
                
        $ventasTotales = $this->Pedido->find('all', array(
            'recursive'=>-1,
            'fields'=>array('SUM(total) as total')
        ));
        
        $cantidadMesas = $this->Pedido->find('first', array(
            'recursive'=>-1,
            'order'=>'Pedido.id DESC'
        ));
        
        $ultimosCincoPedidos = $this->Pedido->find('all', array(
            'recursive'=>0,
            'limit'=>5,
            'order'=>array('Pedido.id DESC')
        ));
        //debug()
        
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
        //$this->set(compact('ventas'));
        
        $this->set(compact('pedidosHoy', 'ventasTotales', 'cantidadMesas', 'ultimosCincoPedidos', 'ventas'));
    }
}
?>