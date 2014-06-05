<?php 
class ReportesController extends AppController{
    
    public $helpers = array('Html', 'Form'); 
    public $uses = array('Producto', 'Movimientosinsumo', 'Pedido', 'Item', 'Usuario','Recibo','Bodega','User','Almacen','Insumo','Factura','Retraso','Lugare');
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
           'conditions'=>array('Pedido.user_id'=>$mozo, 'Pedido.fecha like'=>$fecha), 
           'order'=>array('Pedido.id asc')
           )
           );
           
           $mozo = $pedidos[0]['User']['nombre'];
           $this->set(compact('pedidos', 'mozo'));   
        }else{
            $mozos = $this->User->find('list', array('conditions'=>array('User.perfile_id'=>2), 'fields'=>array('User.nombre')));
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
        'User.nombre LIKE' =>'%'.$data.'%',
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

       $mozos = $this->User->find('list', array('conditions'=>array('User.perfile_id'=>2), 'fields'=>array('Usser.nombre')));
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
                                            'User.nombre LIKE' =>'%'.$data.'%',
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
                   'User.nombre LIKE' =>'%'.$data.'%',
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
                    $cadena2 = array('Pedido.user_id' => $mozo);
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
        'User.nombre LIKE' =>'%'.$data.'%',
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
        $mozos = $this->User->find('list', array('conditions'=>array('User.perfile_id'=>2), 'fields'=>array('User.nombre')));
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
        $maxmovimientos = $this->Bodega->find('all', array(
        'fields'=>array('MAX(Bodega.id) as id'),
        'group'=>array('Bodega.insumo_id')
        ));
        $ides = array();
        $i=0;
        foreach($maxmovimientos as $movimiento){
            $ides[$i]=$movimiento['0']['id'];
            $i++;
        }
        $movimientos = $this->Bodega->find('all', array(
        'conditions'=>array('Bodega.id'=>$ides),
        'order'=>array('Bodega.id DESC')
        ));
        $this->set(compact('movimientos'));
    }
    public function formularioreporteproductos(){
        $meseros = $this->User->find('list',array('fields' => 'User.nombre','conditions' => array('User.role' => 'Moso')));
        $insumos = $this->Insumo->find('list',array('fields' => 'Insumo.nombre'));
        $usuarios = $this->User->find('list',array('fields' => 'User.nombre'));
        $lugares = $this->Lugare->find('list',array('fields' => 'Lugare.nombre'));
        $productos = $this->Producto->find('list',array('fields' => 'Producto.nombre'));
        $this->set(compact('meseros','insumos','usuarios','lugares','productos'));
    }
    public function reportepedidos(){
        //debug($this->request->data);exit;
       $fechaini = $this->request->data['Reportes']['fechaini'];
       $fechafin = $this->request->data['Reportes']['fechafin'];
       $condiciones['Pedido.created >='] = $fechaini;
       $condiciones['Pedido.created <='] = $fechafin;
       
       $moso = $this->request->data['Reportes']['mesero'];
       if(!empty($moso) || $moso != 0)
       {
        $condiciones['User.id'] = $moso;
       }
       //debug($fechafin);
       //debug($fechaini);
       
       $pedidos = $this->Pedido->find('all',array('recursive' => 0,'conditions' => $condiciones));
       $this->set(compact('pedidos'));
       //debug($pedidos);exit;
    }
    public function cuentaItem($idPedido = null)
    {
        return $this->Item->find('count',array('conditions' => array('Item.pedido_id' => $idPedido)));
    }
    
    public function reporteinventarios()
    {
        $fechaini = $this->request->data['Reportes']['fechaini'];
       $fechafin = $this->request->data['Reportes']['fechafin'];
       $condiciones['Bodega.fecha >='] = $fechaini;
       $condiciones['Bodega.fecha <='] = $fechafin;
       $condiciones['Bodega.ingreso !='] = 0;
       $condiciones['Bodega.lugare_id'] = $this->request->data['Reportes']['lugar'];
       $insumo = $this->request->data['Reportes']['insumo'];
       if(!empty($insumo))
       {
        $condiciones['Bodega.insumo_id'] = $insumo;
       }
       $insumos = $this->Bodega->find('all',array('conditions' => $condiciones));
       //debug($insumos);exit;
       $this->set(compact('insumos'));
    }
    public function reportefacturas()
    {
        $fechaini = $this->request->data['Reportes']['fechaini'];
       $fechafin = $this->request->data['Reportes']['fechafin'];
       $condiciones['Factura.created >='] = $fechaini;
       $condiciones['Factura.created <='] = $fechafin;
       $facturas = $this->Factura->find('all',array('conditions' => $condiciones));
       $this->set(compact('facturas','fechaini','fechafin'));
    }
    public function reporteasistencias()
    {
       $fechaini = $this->request->data['Reportes']['fechaini'];
       $fechafin = $this->request->data['Reportes']['fechafin'];
       
       $condiciones['Retraso.fecha >='] = $fechaini;
       $condiciones['Retraso.fecha <='] = $fechafin;
       
       if(!empty($this->request->data['Reportes']['usuario']))
       {
            $condiciones['Retraso.user_id'] = $this->request->data['Reportes']['usuario'];
       }
       
       $asistencias = $this->Retraso->find('all',array('conditions' => $condiciones));
       $this->set(compact('asistencias','fechaini','fechafin'));
       
    }
    public function graficos()
    {
        
        $productos = $this->Item->find('all',array(
        'recursive' => 0
        ,'group' => array('producto_id')
        ,'conditions' => array('Item.estado' => 1)
        ,'fields' => array('Producto.nombre','Producto.id')
        ));
        
        $fecha = date('Y-m-d');
        //debug($fecha);exit;
        $insumosalmacen = $this->Almacen->find('all',array(
        'recursive' => -1
        ,'group' => array('Almacen.insumo_id')
        ,'conditions' => array('Almacen.total !=' => 0)
        ,'fields' => array('MAX(Almacen.id) max')
        
        ));
        $vector_insumos = array();
        $i = 0;
        foreach($insumosalmacen as $in)
        {
            $insumo = $this->Almacen->find('first',array('recursive' => 0
            ,'conditions' => array('Almacen.id' => $in[0]['max'])
            ,'fields' => array('Insumo.nombre','Almacen.total')
            ));
            $vector_insumos[$i]['nombre'] = $insumo['Insumo']['nombre'];
            $vector_insumos[$i]['total'] = $insumo['Almacen']['total'];
            $i++;
        }
        debug($vector_insumos);
        debug($insumosalmacen);exit;
        $this->set(compact('productos'));
    }
    public function reporteproducto()
    {
       $fechaini = $this->request->data['Reportes']['fechaini'];
       $fechafin = $this->request->data['Reportes']['fechafin'];
       $condiciones['Item.fecha >='] = $fechaini;
       $condiciones['Item.fecha <='] = $fechafin;
       $condiciones['Item.estado'] = 1;
       
       $producto = $this->request->data['Reportes']['producto'];
       if(!empty($producto) || $producto != 0)
       {
        $condiciones['Item.producto_id'] = $producto;
       }
       //debug($fechafin);
       //debug($fechaini);
       
       $productos = $this->Item->find('all',array(
       'recursive' => 0
       ,'conditions' => $condiciones
       ,'group' => array('Item.producto_id','date(Item.fecha)')
       ,'fields' => array('date(Item.fecha) fecha','SUM(Item.cantidad) cantidad','SUM(Item.precio) precio','Producto.nombre','Item.precio')
       ));
       
       //debug($productos);exit;
       
       $this->set(compact('productos','fechaini','fechafin'));
    }
}

?>