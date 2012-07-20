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
    function buscar2(){
           // debug($this->data);
            $data= $this->data['dato'];
            $data1 = $this->data['estado'];
            $tipo = $this->data['tipo'];
            
                if($this->data['estado'] != null ){
                    if($data != null){
                     $options=array( 'Usuario.estado' =>$data1,
                                        'OR'=>array(
                                             
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                             }else{
                                  $options=array('Usuario.estado' =>$data1);
                                           
                             }
            
                     }elseif($tipo != null){
                         if($data != null){
                             $options=array( 'Tipousuario.id' =>$tipo,
                                        'OR'=>array(
                                            
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                         }else{
                             $options=array(
                                       
                                           'Tipousuario.id' =>$tipo);
                                            
                         }
                          
                     }
                     else{
                         $options=array(
                                        'OR'=>array(
                                             'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                     }
    
   
   
       $tipos = $this->Tipousuario->find('list',array('fields'=>array('Tipousuario.tipo')));
      
      
    $result=$this->Usuario->find('all',array('conditions'=>array($options)));
 // debug($result);exit;
     $this->set('tipos', $tipos);
     $this->set('all',$result);
    }
    public function pedidos(){
        if(!empty($this->data)){
            debug($this->data);exit;
            $dato = "";
            $fecha = "";
            $mozo = "";
            
             if($this->data['estado'] != null ){
                    if($data != null){
                     $options=array( 'Usuario.estado' =>$data1,
                                        'OR'=>array(
                                             
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                             }else{
                                  $options=array('Usuario.estado' =>$data1);
                                           
                             }
            
                     }elseif($tipo != null){
                         if($data != null){
                             $options=array( 'Tipousuario.id' =>$tipo,
                                        'OR'=>array(
                                            
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                         }else{
                             $options=array(
                                       
                                           'Tipousuario.id' =>$tipo);
                                            
                         }
                          
                     }
                     else{
                         $options=array(
                                        'OR'=>array(
                                             'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.nombre LIKE' =>'%'.$data.'%',
                                            'Usuario.usuario LIKE' =>'%'.$data.'%',
                                            'Usuario.ci LIKE' =>'%'.$data.'%',
                                            'Usuario.correo LIKE' =>'%'.$data.'%'
                                            )
                                        );
                     }
            
            
            
            $this->paginate  = array(
            'conditions'=>array($options),
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
    
}

?>