<?php 
class ReportesController extends AppController{
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Producto', 'Movimientosinsumo', 'Pedido', 'Item');
    public $components = array('Session');
    public $layout = 'admin';
    
    public function index(){
       //$fecha = date('Y-m-d')." %";
    $fecha = "2012-07-19 %";
    $this->paginate  = array(
        'conditions'=>array('Pedido.fecha LIKE'=>$fecha),
        'limit' => 25,        
        'order' => array(
        'Pedido.id' => 'asc'
        )
    );
    // similar to findAll(), but fetches paged results
    $pedidos = $this->paginate('Pedido');
    $this->set(compact('pedidos'));
    }
    public function detallepedido($id=null, $mozo=null){
        //$this->layout = 'imprimir';
        $items = $this->Item->find(
           'all',
           array(
           'conditions'=>array('Item.pedido_id'=>$id)
           )
        );
       
        $this->set(compact('items', 'mozo'));        
    }
    public function mozos(){
        
    }
    public function insumos(){
        
    }
    public function pedidos(){
        $fecha = date('Y-m-d')." %";
        
        $pedidoshoy = $this->Pedido->find('all', array(
        'conditions'=>array('Pedido.fecha like'=>$fecha)
        ));
     
        $this->set(compact('pedidoshoy'));
    }
    
}

?>