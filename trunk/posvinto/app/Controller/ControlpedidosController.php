<?php
App::import('Vendor', 'CodigoControl', array('file' => 'CodigoControl.php'));
class ControlpedidosController extends AppController
{

    public $helpers = array('Form', 'Html');
    public $components = array(
        'Session',
        //'Codigocontrol',
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
        'Mesa',
        'Recibo',
        'Cliente',
        'User');
    public $layout = 'vivavinto';

    public function index()
    {
        //funcion para leer un archivo
        //$this->Pedido->recursive = 0;
        $fecha = date('Y-m-d') . " %";
        $data= $this->Pedido->find('all', array('conditions' => array('Pedido.fecha LIKE' => $fecha),
            'order' => array('Pedido.id' => 'desc')));    
        //debug($data);exit;
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
        $pf = $this->Parametrosfactura->find('first', array('order'=>array('Parametrosfactura.id DESC')));
        
        $this->request->data='';
        if(!$existe){
            $this->request->data['Cliente']['nombre']= $cliente;
            $this->request->data['Cliente']['nombrenit']=$cliente;
            $this->request->data['Cliente']['nit']=$nit;
            $this->Cliente->create();
            $this->Cliente->save($this->request->data);
        }
        /*$data = array('id' => $id_pedido,'monto'=>$montoTotal);
        $this->Pedido->save($data);*/
        
        
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
                //$this->Codigocontrol->CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
                $nuevocodigo = new CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
                
                $codigo = $nuevocodigo->generar();
                //$this->Factura->id = $nfactura;
                //$this->request->data[''];
                //debug($codigo);exit;
            }
            //debug($this->data);
            //if($this)
            //$this->request->data['Facturar']['']
            //$this->request->data['Factura']['cliente']=
        
        //debug($this->data);
        $items = $this->Item->find('all', array('recursive' => 1, 'conditions' => array
                ('Item.pedido_id' => $id_pedido,'Item.pagado' => 0)));

        $atotal = $montoTotal;
        $total = number_format($atotal, 2, '.', ',');
        $monto = split('\.', $total);
        $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
        
        foreach ($items as $pro) {
            $this->Item->id = $pro['Item']['id'];
            $this->request->data['Item']['pagado'] = 1;
            $this->Item->save($this->request->data['Item']);
            $f = false;
            if (count($productos_vector) > 0) {
                for ($i = 0; $i < count($productos_vector); $i++) {
                    if ($productos_vector[$i]['Producto']['producto_id'] == $pro['Item']['producto_id']) {
                        //$productos_vector[$i]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                        $productos_vector[$i]['Producto']['cantidad']++;
                        $f = true;
                    }
                }
            }

            if ($f == false) {
                $n = count($productos_vector);
                $productos_vector[$n]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                $productos_vector[$n]['Producto']['cantidad'] = 1;
                $productos_vector[$n]['Producto']['nombre'] = $pro['Producto']['nombre'];
                $productos_vector[$n]['Producto']['precio'] = $pro['Producto']['precio'];
            }
        }
        $this->marcapagado($id_pedido,4);
        //debug($atotal);
        //debug($totalliteral);
        //debug($pedido);
        //debug($items);
        //debug($pf);
        $pedido = $id_pedido;
        
        $this->set(compact('pedido', 'items', 'pf', 'totalliteral', 'montoTotal','monto', 'efectivo', 'cambio','cliente', 'nitcliente', 'nfactura', 'codigo','fechalimite','productos_vector'));
    }
    public function marcapagado($idPedido = null,$estado = null)
    {
        $item = $this->Item->find('first',array('recursive' => -1,'conditions' => array('Item.pedido_id' => $idPedido,'Item.estado' => 1,'Item.pagado' => 0)));
        if(empty($item))
        {
            $this->Pedido->id = $idPedido;
            $this->request->data['Pedido']['estado'] = $estado;
            $this->Pedido->save($this->request->data['Pedido']);
            $this->desocupamesa($idPedido);
        }
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
        $usuario = $this->Session->read('Auth.User.id');
        
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_pedido,'Item.pagado' => 0)));
        $totalpagado = 0.00;
        foreach ($pedido as $item)
        {
            $totalpagado += $item['Item']['precio'];
        }
        $moso = $this->Pedido->find('first', array('recursive' => 0, 'conditions' =>
            array('Pedido.id' => $id_pedido)));
        //debug($moso);
        $descuentos = $this->Descuento->find('all');
        //debug($pedido);exit;
        
        
        
        foreach ($pedido as $pro) {
            $f = false;
            if (count($productos_vector) > 0) {
                for ($i = 0; $i < count($productos_vector); $i++) {
                    if ($productos_vector[$i]['Producto']['producto_id'] == $pro['Item']['producto_id']) {
                        //$productos_vector[$i]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                        $productos_vector[$i]['Producto']['cantidad']++;
                        $f = true;
                    }
                }
            }

            if ($f == false) {
                $n = count($productos_vector);
                $productos_vector[$n]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                $productos_vector[$n]['Producto']['cantidad'] = 1;
                $productos_vector[$n]['Producto']['nombre'] = $pro['Producto']['nombre'];
                $productos_vector[$n]['Producto']['precio'] = $pro['Producto']['precio'];
                $productos_vector[$n]['Item']['precio'] = $pro['Item']['precio'];
            }
        }
        
        
        $pedido_cancelado = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_pedido,'Item.pagado' => 1)));
                //debug($pedido_cancelado);exit;
        $totalpagado_cancelado = 0.00;
        foreach ($pedido_cancelado as $item)
        {
            $totalpagado_cancelado += $item['Item']['precio'];
        }
        foreach ($pedido_cancelado as $pro) {
            $f = false;
            if (count($productos_vector_cancelado) > 0) {
                for ($i = 0; $i < count($productos_vector_cancelado); $i++) {
                    if ($productos_vector_cancelado[$i]['Producto']['producto_id'] == $pro['Item']['producto_id']) {
                        //$productos_vector_cancelado[$i]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                        $productos_vector_cancelado[$i]['Producto']['cantidad']++;
                        $f = true;
                    }
                }
            }

            if ($f == false) {
                $n = count($productos_vector_cancelado);
                $productos_vector_cancelado[$n]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                $productos_vector_cancelado[$n]['Producto']['cantidad'] = 1;
                $productos_vector_cancelado[$n]['Producto']['nombre'] = $pro['Producto']['nombre'];
                $productos_vector_cancelado[$n]['Producto']['precio'] = $pro['Producto']['precio'];
                $productos_vector_cancelado[$n]['Item']['precio'] = $pro['Item']['precio'];
            }
        }
        
        //debug($productos_vector_cancelado);exit;
        $this->set(compact('productos_vector_cancelado','pedido', 'id_pedido', 'moso', 'totalpagado', 'descuentos','usuario','productos_vector'));
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
        $cliente = $this->request->data[1]['Pedido']['nombre'];
        $nitcliente = $this->request->data[1]['Pedido']['nit'];
        $idpedido = $this->request->data[1]['Pedido']['idpedido'];
        $datas = $this->request->data;
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
        $datosfactura = $this->Parametrosfactura->find('first', array('order'=>array('Parametrosfactura.id DESC')));
        $nit = $datosfactura['Parametrosfactura']['nit'];
        $autoriza = $datosfactura['Parametrosfactura']['numero_autorizacion'];
        $fechalimite = $datosfactura['Parametrosfactura']['fechalimite'];
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
            $llave = $datosfactura['Parametrosfactura']['llave'];
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
            $usuario = $this->User->find('first', array('User.id' => $idusuario));
            $idsucursal = $usuario['Sucursal']['id'];
            $sucursal = $this->Sucursal->findById($idsucursal);
            $fech = date("Y-m-d H:m:s");
            $fech2 = split(' ', $fech);
            $fecha = $fech2[0];
            $hora = $fech2[1];
            //debug($datos);exit;
            $this->set(compact('datosfactura', 'idfactura', 'cliente', 'nitcliente', 'codigo', 'fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'totalliteral', 'total','fechalimite'));
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
        //debug($this->request->data);exit;
        $cliente = $this->request->data[1]['Pedido']['nombre'];
        $nitcliente = $this->request->data[1]['Pedido']['nit'];
        $idpedido = $this->request->data[1]['Pedido']['idpedido'];
        $efectivo = $this->request->data[1]['Pedido']['efectivo'];
        $datas = $this->request->data;
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
        $cambio = $efectivo - $total;
        $total = number_format($total, 2, '.', ',');
        $monto = split('\.', $total);
        $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
        $datosfactura = $this->Parametrosfactura->find('first', array('order'=>array('Parametrosfactura.id DESC')));
        $nit = $datosfactura['Parametrosfactura']['nit'];
        $autoriza = $datosfactura['Parametrosfactura']['numero_autorizacion'];
        $fechalimite = $datosfactura['Parametrosfactura']['fechalimite'];
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
            $llave = $datosfactura['Parametrosfactura']['llave'];
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
            $idusuario = $this->Session->read('Auth.User.id');
            $usuario = $this->User->find('first', array('User.id' => $idusuario));
            $idsucursal = $usuario['Sucursal']['id'];
            $sucursal = $this->Sucursal->findById($idsucursal);
            $fech = date("Y-m-d H:m:s");
            $fech2 = split(' ', $fech);
            $fecha = $fech2[0];
            $hora = $fech2[1];
            //  DEBUG($datos);exit;
            $this->set(compact('datosfactura', 'idfactura', 'cliente', 'nitcliente', 'codigo', 'fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'totalliteral', 'total','fechalimite'));
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
            `User`.`id`, `User`.`nombre`, `User`.`direccion`, `User`.`usuario`, `User`.`pass`, `User`.`codigo`, `User`.`perfile_id` 
            FROM `sisvinto`.`pedidos` AS `Pedido` 
            LEFT JOIN `sisvinto`.`usuarios` AS `User` 
            ON (`Pedido`.`usuario_id` = `User`.`id`)
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
            $this->set('mozos', $this->User->find('list', array('conditions' => array('User.perfile_id' =>
                            2), 'fields' => array('User.nombre'))));
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
        //debug($data);exit;
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
       
        $data = array('id'=>$idPedido);
        
        if($this->Pedido->save($data)){
            
            $this->Recibo->create();
            if($this->Recibo->save($this->request->data['Recibo'])){
               $idRecibo = $this->Recibo->getLastInsertID();
               //debug($idRecibo);
               $recibo = $this->Recibo->find('first', array(
               'conditions'=>array('Recibo.id'=>$idRecibo)
               ));
               $this->items_pagados($idPedido);
               $this->marcapagado($idPedido,3);
               
             $this->desocupamesa($idPedido);
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
    public function items_pagados($idPedido = null)
    {
        $items = $this->Item->find('all',array('recursive' => -1,'conditions' => array('Item.pedido_id' => $idPedido,'Item.pagado' => 0)));
        foreach($items as $it)
        {
            $this->Item->id = $it['Item']['id'];
            $this->request->data['Item']['pagado'] = 1;
            $this->Item->save($this->request->data['Item']);
        } 
    }
    public function desocupamesa($idPedido = null)
    {
        $mesa = $this->Mesa->findBypedido_id($idPedido,null,null,null,null,-1);
        if(!empty($mesa))
        {
            $this->Mesa->id = $mesa['Mesa']['id'];
            $this->request->data['Mesa']['pedido_id'] = null;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        
    }
    public function imprimircuenta($idPedido=null){
        
        $this->layout = 'imprimir';
        $datosPedido = $this->Pedido->find('first', array(
        'conditions'=>array('Pedido.id'=>$idPedido)
        ));
        
        $mozo = $datosPedido['User']['nombre'];
        $mesa = $datosPedido['Pedido']['mesa'];
        $pedido = $this->Item->find('all', array(
        'conditions'=>array('Item.pedido_id'=>$idPedido)
        ));
        
        foreach ($pedido as $pro) {
            $f = false;
            if (count($productos_vector) > 0) {
                for ($i = 0; $i < count($productos_vector); $i++) {
                    if ($productos_vector[$i]['Producto']['producto_id'] == $pro['Item']['producto_id']) {
                        //$productos_vector[$i]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                        $productos_vector[$i]['Producto']['cantidad']++;
                        $f = true;
                    }
                }
            }

            if ($f == false) {
                $n = count($productos_vector);
                $productos_vector[$n]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                $productos_vector[$n]['Producto']['cantidad'] = 1;
                $productos_vector[$n]['Producto']['nombre'] = $pro['Producto']['nombre'];
                $productos_vector[$n]['Producto']['precio'] = $pro['Producto']['precio'];
            }
        }
        
        //debug($productos_vector);exit;
        $this->set(compact('pedido', 'idPedido', 'mozo', 'mesa','productos_vector'));

    }
    public function dividircuenta($idpedido=null){
        $pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $idpedido, 'Item.pagado' => 0)));
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
        
        foreach ($detalle as $pro) {
            $f = false;
            if (count($productos_vector) > 0) {
                for ($i = 0; $i < count($productos_vector); $i++) {
                    if ($productos_vector[$i]['Producto']['producto_id'] == $pro['Detalle']['producto_id']) {
                        //$productos_vector[$i]['Producto']['producto_id'] = $pro['Item']['producto_id'];
                        $productos_vector[$i]['Producto']['cantidad']++;
                        //$productos_vector[$i]['Producto']['precio'] = $productos_vector[$i]['Producto']['cantidad']*$productos_vector[$i]['Producto']['precio'];
                        $f = true;
                    }
                }
            }
            
            if ($f == false) {
                $n = count($productos_vector);
                $productos_vector[$n]['Producto']['producto_id'] = $pro['Detalle']['producto_id'];
                $productos_vector[$n]['Producto']['cantidad'] = 1;
                $productos_vector[$n]['Producto']['nombre'] = $pro['Detalle']['producto'];
                $productos_vector[$n]['Producto']['precio'] = $pro['Detalle']['precio'];
            }
        }
        
        
        $pedido = '';
        $pedido = $detalle;
        //debug($productos_vector);exit;
        $this->set(compact('pedido', 'idpedido','productos_vector'));
    }
    public function dividircuenta2()
    {
        //debug($this->request->data);exit;
        $this->layout = 'imprimir';
        $idpedido = $this->request->data[1]['Pedido']['idpedido'];
        $facturasw = $this->request->data[1]['Pedido']['factura'];
        $recibosw = $this->request->data[1]['Pedido']['recibo'];
        $efectivo = $this->request->data[1]['Pedido']['efectivo'];
        $cliente = $this->request->data[1]['Pedido']['nombre'];
        $nitcliente = $this->request->data[1]['Pedido']['nit'];
            //debug($nitcliente);exit;
        
        $datas = $this->request->data;
        $total = 0.0;
        $i = 0;
        $j = 0;
        $newdata = array();
        $datos = array();
        unset($datas['log']); 
        //debug($datas);exit;
        foreach ($datas as $d)
        {
            $datos[$i]['Pedido']['producto'] = $d['Pedido']['producto'];
            $datos[$i]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
            $datos[$i]['Pedido']['cantidad'] = 0 + $d['Pedido']['cantidad'];
            $datos[$i]['Pedido']['precio'] = $d['Pedido']['preciou'];
            $total +=  $d['Pedido']['preciou']*$d['Pedido']['cantidad'];
            $i++;
            $newdata[$j]['Pedido']['pedido_id'] = $idpedido;
            $newdata[$j]['Pedido']['producto'] = $d['Pedido']['producto'];
            $newdata[$j]['Pedido']['producto_id'] = $d['Pedido']['producto_id'];
            $newdata[$j]['Pedido']['cantidad'] = $d['Pedido']['totalc'] - $d['Pedido']['cantidad'];
            $newdata[$j]['Pedido']['precio'] = $d['Pedido']['preciou'];
            $j++;
        }
         //debug($datos);exit;
         
         
        $total = number_format($total, 2, '.', ',');
        //DEBUG($total);exit;
        if($recibosw == 1 && $facturasw != 1)
        {
            $cambio = $efectivo - $total;
            $this->Recibo->create();
            $this->request->data['Recibo']['pedido_id'] = $idpedido;
            $this->request->data['Recibo']['nombre'] = $cliente;
            $this->request->data['Recibo']['total'] = $total;
            $this->request->data['Recibo']['efectivo'] = $efectivo;
            $this->request->data['Recibo']['cambio'] = $cambio;
            if($this->Recibo->save($this->request->data['Recibo']))
            {
                $nrorecibo = $this->Recibo->getLastInsertID();
            }
            $this->items_pagados($idpedido);
            $this->marcapagado($idpedido,3);
            $monto = split('\.', $total);
            $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
        }
        if($facturasw == 1)
        {
            $cambio = $efectivo - $total;
            $total = number_format($total, 2, '.', ',');
            $monto = split('\.', $total);
            $totalliteral = $this->Montoliteral->getMontoLiteral($monto[0]);
            $datosfactura = $this->Parametrosfactura->find('first', array('order'=>array('Parametrosfactura.id DESC')));
            $nit = $datosfactura['Parametrosfactura']['nit'];
            $autoriza = $datosfactura['Parametrosfactura']['numero_autorizacion'];
            $fechalimite = $datosfactura['Parametrosfactura']['fechalimite'];
            $fecha = date('Y-m-d');
            $this->Factura->create();
            $this->request->data['Factura']['pedido_id'] = $idpedido;
            $this->request->data['Factura']['nit'] = $nitcliente;
            $this->request->data['Factura']['cliente'] = $cliente;
            $this->request->data['Factura']['importetotal'] = $total;
            $this->request->data['Factura']['fecha'] = $fecha;
            if ($this->Factura->save($this->data))
            {
                
                $factura = $this->Factura->find('first', array('order' => array('Factura.id DESC')));
                $idfactura = $factura['Factura']['id'];
                $llave = $datosfactura['Parametrosfactura']['llave'];
                $nueva_fecha = ereg_replace("[-]", "", $fecha);
                $rtotal = round($total);
                //echo $autoriza.' - '.$idfactura.' - '.$nitcliente.' - '.$nueva_fecha.' - '.$total_redondeado.' - '.$llave;exit;
                $nuevocodigo = new CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
                
                $codigo = $nuevocodigo->generar();
               
                $this->Factura->id = $idfactura;
                $this->Factura->read();
                $this->request->data['Factura']['codigo_control'] = $codigo;
                $this->Factura->save($this->data);
                
                
                
                foreach($datos as $da)
                 {
                    for($f = 1;$f <= $da['Pedido']['cantidad'];$f++)
                    {
                        $item = $this->Item->find('first', array('conditions' => array('Item.pedido_id' => $idpedido, 'Item.pagado' => 0,'Item.producto_id' => $da['Pedido']['producto_id'])));
                        if(!empty($item))
                        {
                            $this->Item->id = $item['Item']['id'];
                            $this->request->data['Item']['pagado'] = 1;
                            $this->Item->save($this->request->data['Item']);
                        }
                    }
                 }
                 $this->marcapagado($idpedido,4);
                 
            }
            
        }
        $idusuario = $this->Session->read('Auth.User.id');
        //debug($idusuario);exit;
            $usuario = $this->User->find('first', array('User.id' => $idusuario));
            $idsucursal = $usuario['Sucursal']['id'];
            $sucursal = $this->Sucursal->findById($idsucursal);
            $fech = date("Y-m-d H:m:s");
            $fech2 = split(' ', $fech);
            $fecha = $fech2[0];
            $hora = $fech2[1];
              //DEBUG($newdata);exit;
              //debug($datos);exit;
            $this->set(compact('recibosw','nrorecibo','fechalimite','totalliteral','cambio','efectivo','fecha', 'hora', 'datos', 'newdata', 'sucursal', 'monto', 'total','facturasw','cliente','nitcliente','autoriza','idfactura','codigo','nit'));
        
    }
    public function dividircuenta3(){
        //debug($this->data);exit;
        if (!empty($this->request->data))
        {
            //debug($this->data);exit;
            $count = 0;
            $detalle = $this->request->data;
            $sw = false;
            foreach($detalle as $de)
            {
                if($de['Detalle']['cantidad'] != 0)
                {
                    $sw = true;
                }
            }
            //debug($sw);exit;
            if($sw == false)
            {
                $this->redirect(array('action' => 'index'));
            }
            $this->set(compact('detalle'));
        } else
        {
            //$this->redirect($this->referer());
            $this->redirect(array('action' => 'index'));
            //http://localhost/posvinto/posvinto/controlpedidos
            //$this->redirect('http://localhost/posvinto/posvinto/controlpedidos');
        }
    }
    public function ajaxmeseros( $idPedido = null){
        $this->layout = 'ajax';
        $mosos = $this->User->find('all', array(
        'fields'=>array('User.id', 'User.nombre'),
        'conditions'=>array('User.role like '=>'Moso')
        ));
        $this->set(compact('mosos','idPedido'));
    }
    public function reasignamesero(){
        //debug($this->request->data);
        $idPedido = $this->request->data['controlpedidos']['pedido'];
        $moso = $this->request->data['controlpedidos']['mesero'];
        $obs = $this->request->data['controlpedidos']['observaciones'];
        $data = array('id'=>$idPedido, 'user_id'=>$moso, 'observaciones'=>$obs);
        //debug($data);exit;
        if($this->Pedido->save($data)){
            $this->Session->setFlash('Mesa reasignada', 'alerts/bueno');
            $this->redirect(array('action'=>'index'));
        }else{
            $this->Session->setFlash('Error no se pudo reasignar la mesa', 'alerts/bueno');
            $this->Session->redirect(array('action'=>'index'));
        }       
    }
    public function eliminapedido($idPedido = null)
    {
        $items = $this->Item->findAllBypedido_id($idPedido,null,null,null,null,-1);
        
        if(!empty($items))
        {
            $this->Session->setFlash('No se puede eliminar debe de quitar los Items Asociados!!!!','alerts/error');
            $this->redirect(array('action' => 'index'));
        }
        else{
            if($this->Pedido->delete($idPedido))
            {
                $mesa = $this->Mesa->findBypedido_id($idPedido,null,null,null,null,-1);
                if(!empty($mesa))
                {
                    $this->Mesa->id = $mesa['Mesa']['id'];
                    $this->request->data['Mesa']['pedido_id'] = null;
                    $this->Mesa->save($this->request->data['Mesa']);
                }
                $this->Session->setFlash('Se elimino correctamente!!!','alerts/bueno');
                $this->redirect(array('action' => 'index'));
            }
            else{
                $this->Session->setFlash('No se pudo eliminar intente nuevamente!!!','alerts/error');
                $this->redirect(array('action' => 'index'));
            }
        }

    }
    public function pidedato()
    {
        $this->layout = 'ajax';
        //debug($this->request->data);exit;
        $nit = $this->request->data[1]['Pedido']['nit'];
        $cliente = $this->Cliente->findBynit($nit,null,null,null,null,-1);
        $this->set(compact('cliente'));
    }
    public function terminapedido($idPedido = null)
    {
        $this->Pedido->id = $idPedido;
        $this->request->data['Pedido']['estado'] = 3;
        $this->Pedido->save($this->request->data['Pedido']);
        $mesa = $this->Mesa->findBypedido_id($idPedido,null,null,null,null,-1);
        $this->Mesa->id = $mesa['Mesa']['id'];
        $this->request->data['Mesa']['pedido_id'] = null;
        $this->Mesa->save($this->request->data['Mesa']);
        $this->redirect(array('action' => 'index'));
    }
    public function calcula_debe($idPedido = null)
    {
        $total = 0;
        
        $items =  $this->Item->find('all',array('conditions' =>array('Item.pedido_id' => $idPedido,'Item.estado' => 1,'Item.pagado' => 0),'fields' => 'SUM(Item.precio) total'));
        //debug($items[0][0]['total']);exit;
        if(!empty($items[0][0]['total']))
        {
            $total = $items[0][0]['total'];
        }
        
        return $total;
        
    }
}

?>