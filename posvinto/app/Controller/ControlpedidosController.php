<?php

class ControlpedidosController extends AppController
{

    public $helpers = array('Form', 'Html');
    public $components = array(
        'Session',
        'Codigocontrol',
        'Montoliteral',
        'Fechasconvert'
        );
    public $uses = array(
        'Pedido',
        'Usuario',
        'Item',
        'Parametrosfactura',
        'Factura',
        'Sucursal',
        'Descuento',
        'Recibo',
        'Cliente');
    public $layout = 'vivavinto';

    public function index()
    {
        //funcion para leer un archivo
        //$this->Pedido->recursive = 0;
        $fecha = date('Y-m-d') . " %";
        $this->paginate = array('conditions' => array('Pedido.fecha LIKE' => $fecha),
            'order' => array('Pedido.id' => 'desc'));
        // similar to findAll(), but fetches paged results
        $data = $this->paginate('Pedido');       

        $this->set(compact('data'));
    }
    public function ajaxnombre($nit=null){
      
        $this->layout = 'ajax';
        $nombre = $this->Cliente->find('first', array('conditions'=>array('Cliente.nit'=>$nit)));
              
        if(!empty($nombre)){
            $nombre = $nombre['Cliente']['nombrenit'];
            $existe =1;
        }else{
            $nombre = null;
            $existe =0;
        }
        $this->set(compact('nombre', 'existe'));
    }
    public function facturar()
    {
        $this->layout = 'imprimir';
        
        $usuario = $this->Session->read('Auth.user.nombre');
        //debug($this->request->data);exit;
        $existe = $this->request->data['Controlpedidos']['existe'];
        $id_pedido = $this->request->data['Controlpedidos']['id_pedido'];
        
        $montoTotal = $this->request->data['Controlpedidos']['monto'];
        $nit = $this->request->data['Controlpedidos']['nit'];
        $nombre = $this->request->data['Controlpedidos']['nombre'];
        $efectivo = $this->request->data['Controlpedidos']['efectivo'];
        $efectivo = number_format($efectivo, 2, '.',',');
        $cambio = $this->request->data['Controlpedidos']['cambio'];
        $cambio = number_format($cambio, 2, '.',',');
        $cliente = $this->request->data['Controlpedidos']['nombre'];
        $nitcliente = $this->data['Controlpedidos']['nit'];
        $pf = $this->Parametrosfactura->find('first');
        
        $this->request->data='';
        
        if(!$existe){
            $this->request->data['Cliente']['nombre']= $nombre;
            $this->request->data['Cliente']['nombrenit']=$nombre;
            $this->request->data['Cliente']['nit']=$nit;
            $this->Cliente->create();
            $this->Cliente->save($this->request->data);
        }
        
        $data = array('id'=>$id_pedido, 'estado'=>4,'monto'=>$montoTotal);
        $this->Pedido->save($data);
        
        

        $pedido = $this->Pedido->find('all', array('recursive' => -1, 'conditions' =>
            array('id' => $id_pedido)));
            
        
            //debug($this->data);
            
            $importe = $pedido['0']['Pedido']['total'];
            $this->request->data = "";
            $this->request->data['Factura']['cliente'] = $cliente;
            $this->request->data['Factura']['nit'] = $nitcliente;
            $this->request->data['Factura']['importetotal'] = $importe;
            $this->Factura->create();
            
            if ($this->Factura->save($this->data))
            {
                
                $fechalimite = $this->Fechasconvert->doRevert($pf['Parametrosfactura']['fechalimite']);
    
                $nfactura = $this->Factura->getLastInsertID();

                //datos de prueba para la factura
                /* $autoriza = '29040011007';
                  $idfactura = '1503';
                  $nitcliente = '4189179011';
                  $nueva_fecha = '20070702';
                  $rtotal = '2500';
                  $llave = '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A'; */
                $autoriza = $pf['Parametrosfactura']['numero_autorizacion'];
                $idfactura = $nfactura;
                $fecha = date('Y-m-d');
                $nueva_fecha = ereg_replace("[-]", "", $fecha);
                $rtotal = round($importe);
                $llave = $pf['Parametrosfactura']['llave'];
                //debug($autoriza);
                //$nitcliente = $nitcliente
                //$autoriza = $pf['Parametrosfactura']['numero_aurorizacion'];
                //autorizacion, factura, nit, fecha, monto, llave
                $this->Codigocontrol->CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
                $codigo = $this->Codigocontrol->generar();
                //$this->Factura->id = $nfactura;
                //$this->request->data[''];
                //debug($codigo);
            }
            //debug($this->data);
            //if($this)
            //$this->request->data['Facturar']['']
            //$this->request->data['Factura']['cliente']=
        
        //debug($this->data);
        $items = $this->Item->find('all', array('recursive' => 1, 'conditions' => array
                ('Item.pedido_id' => $id_pedido)));

        $atotal = $montoTotal;
        $total = number_format($atotal, 2, '.', ',');
        $monto = split('\.', $total);
        $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
       
        //debug($atotal);
        //debug($totalliteral);
        //debug($pedido);
        //debug($items);
        //debug($pf);
        $pedido = $id_pedido;
        
        $this->set(compact('pedido', 'items', 'pf', 'totalliteral', 'montoTotal','monto', 'efectivo', 'cambio','cliente', 'nitcliente', 'nfactura', 'codigo','fechalimite'));
    }

    public function ajaxpago($id_pedido = null)
    {
        $this->layout = 'ajax';
        if (!empty($this->data))
        {
            debug($this->data);
            $pago = $this->data['Pedido']['monto'];
            $data = array('id' => $id_pedido, 'monto' => $pago);
            $this->Pedido->id = $id_pedido;
            $this->request->data['Pedido']['monto'] = $pago;
            $this->request->data['Pedido']['estado'] = 3;
            // This will update Recipe with id 10
            //$this->Recipe->save($data);
            if ($this->Pedido->save($this->data))
            {
                $this->redirect(array('action' => 'verpedido', $id_pedido));
            }
        } else
        {
            
        }
        $this->set(compact('id_pedido'));
    }

    public function ajaxverecibo($id_pedido = null)
    {
        $this->layout = 'ajax';
        //$this->layout='imprimir';
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_pedido)));
        $totalpagado = 0.00;
        foreach ($pedido as $item)
        {
            $totalpagado += $item['Item']['precio'];
        }
        $moso = $this->Pedido->find('first', array('recursive' => 0, 'conditions' =>
            array('Pedido.id' => $id_pedido)));
        //debug($moso);
        $descuentos = $this->Descuento->find('list', array('fields' => array('Descuento.porcentaje',
                'Descuento.observacion')));
        $this->set(compact('pedido', 'id_pedido', 'moso', 'totalpagado', 'descuentos'));
    }

    public function verpedido($id_pedido = null)
    {
        //$this->layout = 'ajax';
        //$this->layout='imprimir';
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_pedido)));
        $totalpagado = 0.00;
        foreach ($pedido as $item)
        {
            $totalpagado += $item['Item']['precio'];
        }
        $moso = $this->Pedido->find('first', array('recursive' => 0, 'conditions' =>
            array('Pedido.id' => $id_pedido)));
        //debug($moso);
        $descuentos = $this->Descuento->find('all');
        //debug($descuentos);exit;
        $this->set(compact('pedido', 'id_pedido', 'moso', 'totalpagado', 'descuentos'));
    }

    public function imprecibo($id_pedido = null)
    {
        //$this->layout='imprimir';
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_pedido)));
        $totalpagado = 0.00;
        foreach ($pedido as $item)
        {
            $totalpagado += $item['Item']['precio'];
        }
        $moso = $this->Pedido->find('first', array('recursive' => 0, 'conditions' =>
            array('Pedido.id' => $id_pedido)));
        //debug($moso);
        $descuentos = $this->Descuento->find('list', array('fields' => array('Descuento.porcentaje',
                'Descuento.observacion')));
        $this->set(compact('pedido', 'id_pedido', 'moso', 'totalpagado', 'descuentos'));
        if (!empty($this->data))
        {
            $this->request->data['Recibo']['fecha'] = date('Y-m-d');
            $this->Recibo->create();
            if ($this->Recibo->save($this->data))
            {
                $this->Session->setFlash(__('Recibo guardado'));
                //$this->redirect(array('action' => 'index', $id));
            } else
            {
                $this->Session->setFlash('error');
                $this->redirect(array('action' => 'index'), null, true);
            }
        }
    }

    public function autocomplete()
    {
        
    }

    public function facturar1($idpedido = null)
    {
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $idpedido)));
        //debug($pedido);exit;
        $this->set(compact('pedido', 'idpedido'));
    }

    public function recibo($idpedido = null)
    {
        if (!empty($this->data))
        {
            if ($this->Factura->save($this->data))
            {
                $this->Session->setFlash('Recibo registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);
            } else
            {
                $this->Session->setFlash('No se pudo registrar el recibo!!!');
                $this->redirect(array('action' => 'index'), null, true);
            }
        }
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $idpedido)));
        $this->set(compact('pedido', 'idpedido'));
    }

    public function facturar3()
    {
        //  debug($this->data);exit;
        if (!empty($this->data))
        {
            //debug($this->data);exit;
            $count = 0;
            $detalle = $this->data;
            $this->set(compact('detalle'));
        } else
        {
            //$this->redirect($this->referer());
            $this->redirect(array('action' => 'index'));
            //http://localhost/posvinto/posvinto/controlpedidos
            //$this->redirect('http://localhost/posvinto/posvinto/controlpedidos');
        }
    }

    public function dividir($idped = null)
    {
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $idped)));
        //debug($pedido);
        $detalle = array();
        $i2 = 0;
        foreach ($pedido as $p)
        {
            for ($i = 0; $i < $p['Item']['cantidad']; $i++)
            {
                $detalle[$i2]['Detalle']['producto_id'] = $p['Producto']['id'];
                $detalle[$i2]['Detalle']['producto'] = $p['Producto']['nombre'];
                $detalle[$i2]['Detalle']['precio'] = $p['Producto']['precio'];
                $detalle[$i2]['Detalle']['fecha'] = $p['Item']['fecha'];
                $i2++;
            }
        }
        //debug($detalle);exit;
        $this->set(compact('detalle', 'idped'));
    }

    public function facturartotal()
    {
        $this->Factura->create();
        if ($this->Factura->save($this->data))
        {
            $this->Session->setFlash('Factura registrada con exito');
            $this->redirect(array('action' => 'index'), null, true);
        } else
        {
            $this->Session->setFlash('No se pudo registrar los datos de la factura');
        }
    }

    public function facturar2()
    {
        $this->layout = 'imprimir';
        $cliente = $this->data[1]['Pedido']['nombre'];
        $nitcliente = $this->data[1]['Pedido']['nit'];
        $idpedido = $this->data[1]['Pedido']['idpedido'];
        $datas = $this->data;
        $total = 0.0;
        $i = 0;
        $j = 0;
        $newdata = array();
        $datos = array();
        foreach ($datas as $d)
        {
            //debug($d);exit;
            if ($d['Pedido']['chk'] != 0)
            {
                $datos[$i]['Pedido']['producto'] = $d['Pedido']['producto'];
                $datos[$i]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
                $datos[$i]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
                $datos[$i]['Pedido']['precio'] = $d['Pedido']['preciou'];
                $total = $total + $d['Pedido']['preciou'];
                $i++;
            } else
            {
                $newdata[$j]['Pedido']['pedido_id'] = $idpedido;
                $newdata[$j]['Pedido']['producto'] = $d['Pedido']['producto'];
                $newdata[$j]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
                $newdata[$j]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
                $newdata[$j]['Pedido']['precio'] = $d['Pedido']['preciou'];
                $j++;
            }
        }
        $total = number_format($total, 2, '.', ',');
        $monto = split('\.', $total);
        $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
        $datosfactura = $this->Parametrosfactura->find('all');
        $nit = $datosfactura[0]['Parametrosfactura']['nit'];
        $autoriza = $datosfactura[0]['Parametrosfactura']['numero_autorizacion'];
        $fecha = date('Y-m-d');
        $this->data = '';
        $this->Factura->create();
        $this->request->data['Factura']['pedido_id'] = $idpedido;
        $this->request->data['Factura']['nit'] = $nitcliente;
        $this->request->data['Factura']['cliente'] = $cliente;
        $this->request->data['Factura']['importetotal'] = $total;
        $this->request->data['Factura']['fecha'] = $fecha;
        // debug($this->data);exit;
        if ($this->Factura->save($this->data))
        {
            $idfactura = $this->Factura->id;
            $llave = $datosfactura[0]['Parametrosfactura']['llave'];
            $nueva_fecha = ereg_replace("[-]", "", $fecha);
            $this->Codigocontrol->CodigoControl($autoriza, $idfactura, $nit, $nueva_fecha, $total, $llave);
            //autorizacion, factura, nit, fecha, monto, llave
            $codigo = $this->Codigocontrol->generar();
            $this->Factura->id = $idfactura;
            $this->Factura->read();
            $this->request->data['Factura']['codigo_control'] = $codigo;
            $this->Factura->save($this->data);
            //debug($idfactura);exit;
            $idusuario = $this->Session->read('usuario_id');
            $usuario = $this->Usuario->find('first', array('Usuario.id' => $idusuario));
            $idsucursal = $usuario['Sucursal']['id'];
            $sucursal = $this->Sucursal->findById($idsucursal);
            $fech = date("Y-m-d H:m:s");
            $fech2 = split(' ', $fech);
            $fecha = $fech2[0];
            $hora = $fech2[1];
            //debug($datos);exit;
            $this->set(compact('datosfactura', 'idfactura', 'cliente', 'nitcliente', 'codigo', 'fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'totalliteral', 'total'));
        } else
        {
            $this->Session->setFlash('No se pudo generar la nueva factura');
            $this->redirect(array('action' => 'index'), null, true);
        }
    }

    public function ajaxfactura($id_pedido = null)
    {
        $this->layout = 'ajax';
        $this->set(compact('id_pedido'));
        if (!empty($this->data))
        {
            debug($this->data);
        } else
        {
            
        }
    }

    public function facturarnormal()
    {
        $this->layout = 'imprimir';
        $cliente = $this->data[1]['Pedido']['nombre'];
        $nitcliente = $this->data[1]['Pedido']['nit'];
        $idpedido = $this->data[1]['Pedido']['idpedido'];
        $datas = $this->data;
        $total = 0.0;
        $i = 0;
        $j = 0;
        $newdata = array();
        $datos = array();
        foreach ($datas as $d)
        {
            if ($d['Pedido']['chk'] != 0)
            {
                $datos[$i]['Pedido']['producto'] = $d['Pedido']['producto'];
                $datos[$i]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
                $datos[$i]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
                $datos[$i]['Pedido']['precio'] = $d['Pedido']['preciou'];
                $total = $total + $d['Pedido']['preciou'];
                $i++;
            } else
            {
                $newdata[$j]['Pedido']['pedido_id'] = $idpedido;
                $newdata[$j]['Pedido']['producto'] = $d['Pedido']['producto'];
                $newdata[$j]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
                $newdata[$j]['Pedido']['cantidad'] = $d['Pedido']['cantidad'];
                $newdata[$j]['Pedido']['precio'] = $d['Pedido']['preciou'];
                $j++;
            }
        }
        /// DEBUG($datos);exit;
        $total = number_format($total, 2, '.', ',');
        $monto = split('\.', $total);
        $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
        $datosfactura = $this->Parametrosfactura->find('all');
        $nit = $datosfactura[0]['Parametrosfactura']['nit'];
        $autoriza = $datosfactura[0]['Parametrosfactura']['numero_autorizacion'];
        $fecha = date('Y-m-d');
        $this->Factura->create();
        $this->request->data['Factura']['pedido_id'] = $idpedido;
        $this->request->data['Factura']['nit'] = $nitcliente;
        $this->request->data['Factura']['cliente'] = $cliente;
        $this->request->data['Factura']['importetotal'] = $total;
        $this->request->data['Factura']['fecha'] = $fecha;
        if ($this->Factura->save($this->data))
        {
            $data = array('id' => $idpedido, 'estado' => 3);
            $this->Pedido->save($data);
            $factura = $this->Factura->find('first', array('order' => array('Factura.id DESC')));
            $idfactura = $factura['Factura']['id'];
            $llave = $datosfactura[0]['Parametrosfactura']['llave'];
            $nueva_fecha = ereg_replace("[-]", "", $fecha);
            $rtotal = round($total);
            //echo $autoriza.' - '.$idfactura.' - '.$nitcliente.' - '.$nueva_fecha.' - '.$total_redondeado.' - '.$llave;exit;
            $this->Codigocontrol->CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
            //autorizacion, factura, nit, fecha, monto, llave
            $codigo = $this->Codigocontrol->generar();
            $this->Factura->id = $idfactura;
            $this->Factura->read();
            $this->request->data['Factura']['codigo_control'] = $codigo;
            $this->Factura->save($this->data);
            $idusuario = $this->Session->read('usuario_id');
            $usuario = $this->Usuario->find('first', array('Usuario.id' => $idusuario));
            $idsucursal = $usuario['Sucursal']['id'];
            $sucursal = $this->Sucursal->findById($idsucursal);
            $fech = date("Y-m-d H:m:s");
            $fech2 = split(' ', $fech);
            $fecha = $fech2[0];
            $hora = $fech2[1];
            //  DEBUG($datos);exit;
            $this->set(compact('datosfactura', 'idfactura', 'cliente', 'nitcliente', 'codigo', 'fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'totalliteral', 'total'));
        } else
        {
            $this->Session->setFlash('No se pudo generar la nueva factura');
            $this->redirect(array('action' => 'index'), null, true);
        }
    }

    public function formbuscar()
    {
        if (!empty($this->data))
        {
            //debug($this->data);
            $a = 0;
            $condiciones = "SELECT `Pedido`.`id`, `Pedido`.`usuario_id`, `Pedido`.`fecha`,Pedido.fechac, `Pedido`.`mesa`, `Pedido`.`estado`, `Pedido`.`total`, 
            `Usuario`.`id`, `Usuario`.`nombre`, `Usuario`.`direccion`, `Usuario`.`usuario`, `Usuario`.`pass`, `Usuario`.`codigo`, `Usuario`.`perfile_id` 
            FROM `sisvinto`.`pedidos` AS `Pedido` 
            LEFT JOIN `sisvinto`.`usuarios` AS `Usuario` 
            ON (`Pedido`.`usuario_id` = `Usuario`.`id`)
            WHERE 1
            ";
            if (!empty($this->data['Pedido']['fecha']))
            {
                $fecha = $this->data['Pedido']['fecha'] . " %";
                $condiciones .= "AND Pedido.fecha LIKE '$fecha'";
                $a++;
            }
            if (!empty($this->data['Pedido']['mozos']))
            {
                $mozo = $this->data['Pedido']['mozos'];
                $condiciones .= "AND Pedido.usuario_id LIKE '$mozo'";
                $a++;
            }
            if (!empty($this->data['Pedido']['mesa']))
            {
                $mesa = $this->data['Pedido']['mesa'];
                $condiciones .= "AND Pedido.mesa = $mesa";
                $a++;
            }
            //debug($condiciones);exit;
            if (!empty($this->data['Pedido']['fecha_desde']) and !empty($this->data['Pedido']['fecha_hasta']))
            {
                $fecha1 = $this->data['Pedido']['fecha_desde'] . " 00:00:00";
                $fecha2 = $this->data['Pedido']['fecha_hasta'] . " 23:59:59";
                $condiciones .= "
                AND (Pedido.fecha >= '$fecha1')
                AND (Pedido.fecha <= '$fecha2')
                ";
                $a++;
            }
            //debug($condiciones);exit;
            if ($a == 0)
            {
                $this->Session->setFlash(__('Debe ingresar al menos un dato!!!!'));
                $this->redirect(array('action' => 'formbuscar'));
            }
            $pedidos = $this->Pedido->query($condiciones);
            //debug($pedidos);
            $this->set(compact('pedidos'));
        } else
        {
            $this->set('mozos', $this->Usuario->find('list', array('conditions' => array('Usuario.perfile_id' =>
                            2), 'fields' => array('Usuario.nombre'))));
        }
    }

    public function verdetallepedido($id = null)
    {
        $this->set('itemspedidos', $this->Item->find('all', array('conditions' => array
                        ('Item.pedido_id' => $id))));
    }

    function totalcondescuento($total = null, $descuento = null)
    {
        $this->layout = 'imprimir';
        $totalpagar = $total - ($total * $descuento);
        $this->set(compact('total', 'totalpagar', 'descuento'));
    }
    public function general(){
      $this->paginate = array(
            'order' => array('Pedido.id' => 'desc'));
        // similar to findAll(), but fetches paged results
        $data = $this->paginate('Pedido');       
        
        $this->set(compact('data'));  
    }
    public function pagarcuenta(){
        $this->layout = 'imprime';
        //debug($this->request->data);exit;
        $idPedido = $this->request->data['Recibo']['pedido_id'];
        $cambio = number_format($this->request->data['Recibo']['cambio'],2,'.', ',');
        $this->request->data['Recibo']['cambio'] = $cambio;
        
        $pedido = $this->Pedido->find('first', array(
        'conditions'=>array('Pedido.id'=>$idPedido),
        'recursive'=>-1));
       
        $data = array('id'=>$idPedido, 'estado'=>3);
        
        if($this->Pedido->save($data)){
            
            $this->Recibo->create();
            if($this->Recibo->save($this->request->data['Recibo'])){
               $idRecibo = $this->Recibo->getLastInsertID();
               //debug($idRecibo);
               $recibo = $this->Recibo->find('first', array(
               'conditions'=>array('Recibo.id'=>$idRecibo)
               ));
             
              // $usuario = $this->Session->read('Auth.User')
               $this->set(compact('recibo', 'usuario'));
            }else{
                $this->Session->setFlash(__('Error al registrar el recibo del pedido '.$pedido['Pedido']['mesa'].' fue pagado'),'alerts/bueno');
                $this->redirect(array('action' => 'verpedido', $pedido['Pedido']['mesa']));
            }
            
        }else{
            $this->Session->setFlash(__('Error al registrar el recibo del pedido de la mesa '.$pedido['Pedido']['mesa'].' fue pagado'),'alerts/bueno');
            $this->redirect(array('action' => 'verpedido', $pedido['Pedido']['mesa']),'alerts/bueno');
        }
    }
    public function imprimircuenta($idPedido=null){
        $pedido = $this->Item->find('all', array(
        'conditions'=>array('Item.pedido_id'=>$idPedido)
        ));
        debug($pedido);exit;
        $this->set(compact('pedido'));

    }

}

?>