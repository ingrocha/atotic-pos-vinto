<?php 
class ReportesController extends AppController{
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Producto', 'Movimientosinsumo', 'Pedido', 'Item', 'Usuario');
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
        $this->layout = 'imprimir';
        $items = $this->Item->find(
           'all',
           array(
           'conditions'=>array('Item.pedido_id'=>$id)
           )
        );
       
        $this->set(compact('items', 'mozo'));        
    }
    public function mozos(){
        if(!empty($this->data)){
          
           $fecha = $this->data['Producto']['fecha']." %";
           $mozo = $this->data['Producto']['mozos'];
           
           $pedidos = $this->Pedido->find(
           'all', array(
           'conditions'=>array('Pedido.usuario_id'=>$mozo, 'Pedido.fecha like'=>$fecha), 
           'order'=>array('Pedido.id asc')
           )
           );
           
           $mozo = $pedidos[0]['Usuario']['nombre'];
           $this->set(compact('pedidos', 'mozo'));   
        }else{
            $mozos = $this->Usuario->find('list', array('conditions'=>array('Usuario.perfile_id'=>2), 'fields'=>array('Usuario.nombre')));
            $this->set(compact('mozos'));
        }
        
    }
    public function insumos(){
        
    }
    public function buscar(){
        $data=$this->data['dato'];
        $options=array(
        'OR'=>array(
        'Pedido.mesa LIKE' =>'%'.$data.'%',
        'Usuario.nombre LIKE' =>'%'.$data.'%',
        'Pedido.fecha LIKE' =>'%'.$data.'%',
        'Pedido.total LIKE' =>'%'.$data.'%'
        )
        );
        /*$result=$this->Pedido->find('all',array('conditions'=>array($options)));
        debug($result);exit;*/
        $this->paginate  = array(
            'conditions'=>array($options),
            'limit' => 25,        
            'order' => array(
            'Pedido.id' => 'desc'
            )
            );

    // similar to findAll(), but fetches paged results
       $data = $this->paginate('Pedido');

       $mozos = $this->Usuario->find('list', array('conditions'=>array('Usuario.perfile_id'=>2), 'fields'=>array('Usuario.nombre')));
       $this->set(compact('data', 'mozos'));

    }
    
    public function pedidos(){
        if(!empty($this->data)){

            $data = $this->data['dato'];
            $fecha = $this->data['fecha'];
            $mozo = $this->data['mozo'];
            $estado = $this->data['estado'];
            
            $options = array();
            
            
            if($data != null && $fecha == null && $mozo == null && $estado == null){
                $options=array( 
                                        'OR'=>array(
                                            'Pedido.mesa LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Pedido.fecha LIKE' =>'%'.$data.'%',
                                            'Pedido.total LIKE' =>'%'.$data.'%'
                                            )
                                        );
            }else{
                $cadena = array();
                if($data != null){
                    $cadena = array(
                   'OR'=>array(
                   'Pedido.mesa LIKE' =>'%'.$data.'%',
                   'Usuario.nombre LIKE' =>'%'.$data.'%',
                   'Pedido.total LIKE' =>'%'.$data.'%'
                   )
                );
                }
                
                
                if($fecha != null){
                    //$options .= ('Pedido.fecha LIKE' =>'%'.$fecha.'%');
                    $cadena2 = array('Pedido.fecha LIKE' => $fecha." %");
                    $cadena = array_merge($cadena, $cadena2);
                }
                if($mozo != null){
                    $cadena2 = array('Pedido.usuario_id' => $mozo);
                    $cadena = array_merge($cadena, $cadena2);
                }
                if($estado != null){
                    $cadena2 = array('Pedido.estado' => $estado);
                    $cadena = array_merge($cadena, $cadena2);
                }
              
                $data = "juan";
                $options=array(
        'OR'=>array(
        'Pedido.mesa LIKE' =>'%'.$data.'%',
        'Usuario.nombre LIKE' =>'%'.$data.'%',
        'Pedido.fecha LIKE' =>'%'.$data.'%',
        'Pedido.total LIKE' =>'%'.$data.'%'
        )
        ); 
    
            }
          
            $this->paginate  = array(
            'conditions'=>array($cadena),
            'limit' => 25,        
            'order' => array(
            'Pedido.id' => 'desc'
            )
            );

    // similar to findAll(), but fetches paged results
            $data = $this->paginate('Pedido');
    
            
       /* $pedidos = $this->Pedido->find('all', array(
        'conditions'=>array('Pedido.fecha like'=>$fecha)
        ));*/
        }else{
            $this->paginate  = array(
            'limit' => 25,
            'order' => array(
            'Pedido.id' => 'desc'
            )
            );
            
            // similar to findAll(), but fetches paged results
            $data = $this->paginate('Pedido');
        }
        $mozos = $this->Usuario->find('list', array('conditions'=>array('Usuario.perfile_id'=>2), 'fields'=>array('Usuario.nombre')));
        $this->set(compact('data', 'mozos'));
    }
    public function ventas(){
        if(!empty($this->data)){
          debug($this->data);exit;  
        }else{
            $this->Session->setFlash(__("Debe introducir un dato para filtro"));
        }
    }
}

?>