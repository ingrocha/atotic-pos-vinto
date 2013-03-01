<?php 
class ReportesController extends AppController{
    
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Producto', 'Movimientosinsumo', 'Pedido', 'Item', 'Usuario');
    public $components = array('Session','Fechasconvert');
    public $layout = 'vivavinto';
    
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
    public function reporteinventario(){
        
        $fecha = date('Y-m-d');
        
        $pedidos = $this->Pedido->find('all', array(
        'conditions'=>array('Pedido.fecha'=>$fecha),
        'order'=>array('Pedido.numero DESC')
        ));
        
        $idespedidos = array();
        $i=0;
        foreach($pedidos as $pedido){
            $idespedidos[$i]= $pedido['Pedido']['id'];
            $i++;
        }
        $movimientos = $this->Movimiento->find('all', array(
        'fields'=>array('MAX(Movimiento.id) as id'),
        'conditions'=>array('Movimiento.pedido_id'=>$idespedidos),
        'group'=>array('Movimiento.insumo_id'),
        'recursive'=>0));
        
        $i=0;
        $ides = array();
        $insumos=array();
        
        foreach($movimientos as $movimiento){
            $mov = $this->Movimiento->find('first', array(
            'conditions'=>array('Movimiento.id'=>$movimiento[0]['id'])
            ));
            
            $idInsumo=$mov['Movimiento']['insumo_id'];
            
            $cantidadStock = $this->Movimiento->find('first', array(
            'fields'=>array('MAX(Movimiento.id) as id'),
            'conditions'=>array('Movimiento.insumo_id'=>$idInsumo)
            ));
            
            $stock = $this->Movimiento->find('first', array(
            'conditions'=>array('Movimiento.id'=>$cantidadStock[0]['id']),
            'recursive'=>-1
            ));
            
            $movimientos[$i]['Insumo']['nombre'] = $mov['Insumo']['nombre'];
            $movimientos[$i]['Movimiento']['salida'] = $mov['Movimiento']['salida'];
            $movimientos[$i]['Movimiento']['totalp'] = $stock['Movimiento']['totalp'];
            $movimientos[$i]['Movimiento']['pesoparcial'] =$stock['Movimiento']['pesoparcial'];
            $i++;
        }
        $this->set(compact('movimientos'));
    }
    public function estadoinventarioactual(){
        
        $maxmovimientos = $this->Movimiento->find('all', array(
        'fields'=>array('MAX(Movimiento.id) as id'),
        'group'=>array('Movimiento.insumo_id')
        ));
        $ides = array();
        $i=0;
        foreach($maxmovimientos as $movimiento){
            $ides[$i]=$movimiento['0']['id'];
            $i++;
        }
        $movimientos = $this->Movimiento->find('all', array(
        'conditions'=>array('Movimiento.id'=>$ides),
        'order'=>array('Movimiento.id DESC')
        ));
        $this->set(compact('movimientos'));
    }
    public function formularioreporteproductos(){
        
    }
    public function reportepedidos(){
       $dato = $this->request->data['dato'];
        $fechas = explode(" - ", $this->request->data['dato']);
        
        $fecha1 = $this->Fechasconvert->doInvertir($fechas[0]);
        $fecha2 = $this->Fechasconvert->doInvertir($fechas[1]);
        
        App::uses('CakeTime', 'Utility');
        //$dia = CakeTime::dayAsSql($fecha1, $fecha2, 'Pedido.created');
        $dia = CakeTime::daysAsSql("$fecha1", "$fecha2", 'Item.fecha');
    
        $pedidos = $this->Item->find('all', array(
        'conditions'=>array($dia),
        'fields'=>array('SUM(Item.cantidad) AS cantidad', 'Pedido.numero','Producto.nombre', 'Producto.precio', 'Item.precio', 'Item.fecha'),
        'group'=>array('Item.producto_id')
        ));
       //debug($pedidos);exit;
       $dia2 = CakeTime::daysAsSql("$fecha1", "$fecha2", 'Recibo.created');
       $descuentos = $this->Recibo->find('all', array(
        'conditions'=>array($dia, 'Item.precio <'=>1),
        'fields'=>array('SUM(Item.cantidad) AS cantidad', 'Pedido.numero', 'Insumo.nombre','Producto.nombre', 'Item.precio', 'Item.fecha'),
        'group'=>array('Item.insumo_id')
        ));
        //debug($descuentos);exit;
        $this->set(compact('pedidos', 'descuentos','dato'));
    }
     
}

?>