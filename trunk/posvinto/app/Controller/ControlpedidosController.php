
<?php 
class ControlpedidosController extends AppController{
    public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session', 'Codigocontrol', 'Montoliteral');
    public $uses = array('Pedido', 'Usuario', 'Item', 'Parametrosfactura', 'Factura', 'Sucursal');
    public $layout = 'admin';
    
    public function index(){
        //$this->Pedido->recursive = 0;
        $fecha = date('Y-m-d')." %";
    
    $this->paginate  = array(
        'conditions'=>array('Pedido.fecha LIKE'=>$fecha),
        'limit' => 25,        
        'order' => array(
            'Pedido.id' => 'desc'
        )
    );

    // similar to findAll(), but fetches paged results
    $data = $this->paginate('Pedido');
    $this->set(compact('data'));

    }
    public function facturar1($idpedido=null){
        $pedido = $this->Item->find('all', array('conditions'=>array('Item.pedido_id'=>$idpedido)));
        $this->set(compact('pedido', 'idpedido'));
    }
    public function recibo($idpedido=null){
        if(!empty($this->data)){
            if($this->Factura->save($this->data)){
                $this->Session->setFlash('Recibo registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            }else{
                $this->Session->setFlash('No se pudo registrar el recibo!!!'); 
                $this->redirect(array('action' => 'index'), null, true); 
            }
        }
        $pedido = $this->Item->find('all', array('conditions'=>array('Item.pedido_id'=>$idpedido)));
       $this->set(compact('pedido', 'idpedido'));
    }
    public function facturar3(){
       // debug($this->data);
        if(!empty($this->data)){
            //debug($this->data);exit;
            $count=0;
            $detalle =$this->data;
            $this->set(compact('detalle'));
        }else{
            
            //$this->redirect($this->referer());
            $this->redirect(array('action' => 'index'));
            //http://localhost/posvinto/posvinto/controlpedidos
            //$this->redirect('http://localhost/posvinto/posvinto/controlpedidos');
        }
    }
    public function dividir($idped = null){
     
            $pedido = $this->Item->find('all', array( 'conditions'=>array('Item.pedido_id'=>$idped)));
        //debug($pedido);
        $detalle = array();
        $i2=0;
        foreach($pedido as $p){
            for($i=0;$i<$p['Item']['cantidad'];$i++){
                $detalle[$i2]['Detalle']['producto_id']= $p['Producto']['id'];
                $detalle[$i2]['Detalle']['producto']= $p['Producto']['nombre'];
                $detalle[$i2]['Detalle']['precio']= $p['Producto']['precio'];
                $detalle[$i2]['Detalle']['fecha']= $p['Item']['fecha'];
                
                $i2++;
            }   
        }
        //debug($detalle);exit;
        $this->set(compact('detalle'));
        
    }
    public function facturartotal(){
        $this->Factura->create();
        if ($this->Factura->save($this->data)) { 

                $this->Session->setFlash('Factura registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar los datos de la factura'); 
            }
    }
    public function facturar2(){
    // debug($this->data);exit;
       $this->layout = 'imprimir';
       $cliente = $this->data[1]['Pedido']['nombre'];
       $nitcliente = $this->data[1]['Pedido']['nit'];
       
       $datas = $this->data;
       
      $total = 0.0;
       $i=0;
       $j=0;
       $newdata = array();
       $datos = array();
       foreach($datas as $d){
           //debug($d);exit;
           if($d['Pedido']['chk'] != 0 ){
             $datos[$i]['Pedido']['producto'] = $d['Pedido']['producto'];
             $datos[$i]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
             $datos[$i]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
             $datos[$i]['Pedido']['precio'] = $d['Pedido']['preciou'];
           // echo "entro acas";exit;
           //debug($d['Pedido']['preciou']);
            $total = $total + $d['Pedido']['preciou'];
            //debug($total);exit;
            $i++;
             }else{
             $newdata[$j]['Pedido']['producto'] = $d['Pedido']['producto'];
             $newdata[$j]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
             $newdata[$j]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
             $newdata[$j]['Pedido']['precio'] = $d['Pedido']['preciou'];
             $j++;
           }
       }
       $total = number_format($total,2, '.', ',');
       $monto = split('\.', $total);
       $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
      
         $datosfactura = $this->Parametrosfactura->find('all');
        //debug($datos);
        //debug($newdata);exit;
        
        $nit =$datosfactura[0]['Parametrosfactura']['nit'];
        $autoriza=$datosfactura[0]['Parametrosfactura']['numero_autorizacion'];
       $fecha = date('Y-m-d');
        $this->Factura->create();
       
        $this->request->data['Factura']['nit']= $nitcliente;
        $this->request->data['Factura']['cliente']= $cliente;
        $this->request->data['Factura']['importetotal']= $total;
        $this->request->data['Factura']['fecha']= $fecha;
        
        if($this->Factura->save($this->data)){
        $factura = $this->Factura->find('first', array('order'=>array('Factura.id DESC')));
        $idfactura = $factura['Factura']['id'];
        $llave = $datosfactura[0]['Parametrosfactura']['llave'];
       $nueva_fecha = ereg_replace("[-]", "", $fecha);
       // debug($nueva_fecha);exit;
       $this->Codigocontrol->CodigoControl($autoriza,
                                            $idfactura,
                                            $nit,
                                            $nueva_fecha,
                                            $total,
                                            $llave);
       
       //autorizacion, factura, nit, fecha, monto, llave
      //$codigo=$this->Codigocontrol->generar();
      $codigo = "as-ewr-dsf";
      $this->Factura->id= $idfactura;
      $this->Factura->read();
       $this->request->data['Factura']['codigo_control']= $codigo;
       $this->Factura->save($this->data);
      //$idusuario = $this->Session->read('usuario_id');
      $idusuario= 5;
      $usuario = $this->Usuario->find('first', array('Usuario.id'=>$idusuario)); 
      $idsucursal = $usuario['Sucursal']['id'];
      $sucursal = $this->Sucursal->findById($idsucursal);
      //debug($sucursal);exit;     
      $fech = date("Y-m-d H:m:s");
      
      $fech2 = split(' ', $fech);
      $fecha = $fech2[0];
      $hora = $fech2[1]; 
     // debug($newdata);    
     // debug($datos);exit; 
     //debug($datosfactura);exit;                                 
      $this->set(compact('datosfactura','idfactura','cliente', 'nitcliente','codigo', 'fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'totalliteral', 'total'));
        }else{
            $this->Session->setFlash('No se pudo generar la nueva factura');
            $this->redirect(array('action' => 'index'), null, true);
        }
       
    }
    public function formbuscar(){
        if(!empty($this->data)){
            //debug($this->data);exit;
            $a=0;
            
            if(empty($this->data['Pedido']['mesa'])){
                $idmesa = 0;
                $a++;
            }else{
                $idmesa = $this->data['Pedido']['mesa'];
            
            }
            if(empty($this->data['Pedido']['mozos'])){
                $mozo = 0;
                $a++;
            }else{
                $mozo =$this->data['Pedido']['mozos'];
            }
            if(empty($this->data['Pedido']['fecha'])){
               $fechac = '0';
               $a++;
            }else{
                //$fechac = $this->data['Pedido']['fecha'];
               $fechachar = split(' ', $this->data['Pedido']['fecha']);
                $fecha = split('-', $fechachar[0]);
                $fechac = '';
                foreach($fecha as $f){
                    $fechac .= $f;
                }
                
                //debug($fechac);
            }
          
            $condiciones = "SELECT `Pedido`.`id`, `Pedido`.`usuario_id`, `Pedido`.`fecha`,Pedido.fechac, `Pedido`.`mesa`, `Pedido`.`estado`, `Pedido`.`total`, 
            `Usuario`.`id`, `Usuario`.`nombre`, `Usuario`.`direccion`, `Usuario`.`usuario`, `Usuario`.`pass`, `Usuario`.`codigo`, `Usuario`.`perfile_id` 
            FROM `sisvinto`.`pedidos` AS `Pedido` 
            LEFT JOIN `sisvinto`.`usuarios` AS `Usuario` 
            ON (`Pedido`.`usuario_id` = `Usuario`.`id`) 
            WHERE (Pedido.mesa = $idmesa OR $idmesa = 0)
            AND (Pedido.usuario_id = $mozo OR $mozo =  0)
            AND (Pedido.fechac = '$fechac' OR '$fechac' = '0')
            ";
            //debug($condiciones);
            if($a == 0){
                $this->Session->setFlash(__('Debe ingresar al menos un dato!!!!'));
                $this->redirect(array('action' => 'formbuscar'));
            }
            $pedidos = $this->Pedido->query($condiciones);            
            //debug($pedidos);
            $this->set(compact('pedidos'));
        }else{
            
            $this->set('mozos',$this->Usuario->find('list',array('conditions'=>array('Usuario.perfile_id'=>1), 'fields'=>array('Usuario.nombre'))));
            }
        
    }
    public function verdetallepedido($id=null){
        $this->set('itemspedidos', $this->Item->find('all', array('conditions'=>array('Item.pedido_id'=>$id))));
    }
     
}
?>

