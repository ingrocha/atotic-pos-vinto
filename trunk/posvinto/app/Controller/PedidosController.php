<?php

App::uses('AppController', 'Controller');

/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property SessionComponent $Session
 * @property AclComponent $Acl
 */
class PedidosController extends AppController
{

    public $helpers = array('Form', 'Html');
    public $components = array('Session');
    public $uses = array(
        'Usuario',
        'Producto',
        'Pedido',
        'Categoria',
        'Item',
        'Insumo',
        'PedidosMesa',
        'Porcione',
        'Bodega',
        'Almacen');
    public $layout = 'publico';

    public function index()
    {
        $this->Pedido->recursive = 0;
        $this->set('pedidos', $this->paginate());
    }

    public function pedidomoso($id_moso = null, $pedido = null, $mesa = null)
    {
        $categorias = $this->Categoria->find('all', array('recursive' => -1, 'conditions' => array('estado' => 1)));
        $productos = $this->Producto->find('all', array(
            'recursive' => -1,
            'order' => 'id DESC',
            'conditions' => array('estado' => 1)));

        $porciones = $this->Porcione->find('all');
        $items_pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $pedido)));
        //debug($items_pedido);
        $cant_platos = $this->Item->find('all', array(
            'recursive' => -1,
            'conditions' => array('Item.pedido_id' => $pedido),
            'fields' => ('SUM(cantidad) as cant')));
        $moso = $this->Usuario->find('first', array('recursive' => -1, 'conditions' => array('id' => $id_moso)));
        //debug($moso);
        $this->set(compact('productos', 'id_moso', 'pedido', 'categorias', 'mesa', 'items_pedido', 'cant_platos', 'moso'));
    }

    //aqui un cambio
    //de muestra
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists())
        {
            throw new NotFoundException(__('Invalid pedido'));
        }
        $this->set('pedido', $this->Pedido->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post'))
        {
            $this->Pedido->create();
            if ($this->Pedido->save($this->request->data))
            {
                $this->Session->setFlash(__('The pedido has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $platos = $this->Pedido->Plato->find('list');
        $usuarios = $this->Pedido->Usuario->find('list');
        $this->set(compact('platos', 'usuarios'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists())
        {
            throw new NotFoundException(__('Invalid pedido'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            if ($this->Pedido->save($this->request->data))
            {
                $this->Session->setFlash(__('The pedido has been saved'));
                $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
            }
        }
        else
        {
            $this->request->data = $this->Pedido->read(null, $id);
        }
        $platos = $this->Pedido->Plato->find('list');
        $usuarios = $this->Pedido->Usuario->find('list');
        $this->set(compact('platos', 'usuarios'));
    }

    public function verdetalle($id_ped = nulll)
    {
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $id_ped)));
        $pedido = $this->Pedido->findById($id_ped);
        //$items = $this->Pedido->find('threaded');
        //debug($pedido);
        $this->set(compact('items'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post'))
        {
            throw new MethodNotAllowedException();
        }
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists())
        {
            throw new NotFoundException(__('Invalid pedido'));
        }
        if ($this->Pedido->delete())
        {
            $this->Session->setFlash(__('Pedido deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Pedido was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function restarproducto($id_item = null, $mesa = null)
    {
        $this->layout = 'ajax';
        $item = $this->Item->findById($id_item);
        //debug($item);
        $precio = $item['Item']['precio'] - $item['Producto']['precio'];
        $id_prod = $item['Item']['producto_id'];
        $cantidad = $item['Item']['cantidad'] - 1;
        $pedido = $item['Pedido']['id'];
        if ($item['Item']['cantidad'] == 1)
        {
            $this->Item->delete($id_item);
        }
        else
        {
            //debug($precio);
            //debug($cantidad);
            $this->Item->id = $id_item;
            $this->Item->read();
            $this->request->data['Item']['cantidad'] = $cantidad;
            $this->request->data['Item']['precio'] = $precio;
            //debug($this->data);exit;
            $this->Item->save($this->data);
        }
        /*         * ********************************************* */
        /*   Porciones productos y reservas de bodega   */
        /*         * ********************************************* */
        $porciones = $this->Porcione->find('all', array(
            'conditions' => array('Porcione.producto_id' => $id_prod),
            'order' => array('Porcione.producto_id ASC'),
            'recursive' => -1));
        //debug($porciones);exit;
        foreach ($porciones as $porcion)
        {
            $item = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' => $porcion['Porcione']['insumo_id']), 'order' => array('Bodega.id desc')));
            //debug($item);exit;
            $this->Bodega->id = $item['Bodega']['id'];
            $this->Bodega->read();
            $verif = $item['Bodega']['salida'] - 1;
            if ($verif < 0)
            {
                $verif = 0;
            }
            $this->request->data['Bodega']['salida'] = $verif;
            $this->request->data['Bodega']['total'] = $item['Bodega']['total'] + 1;
            $this->Bodega->save($this->data);
        }
        /*         * ***************fin actualiza bodega****************************** */
        $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
        $cant_platos = $this->Item->find('all', array(
            'conditions' => array('pedido_id' => $pedido),
            'recursive' => -1,
            'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);exit;
        $this->set(compact('items', 'pedido', 'cant_platos', 'mesa'));
    }

    public function registrarpedido($pedido = null, $total = null)
    {

        $this->Pedido->id = $pedido;
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $pedido)));
        $total = 0;
        foreach ($items as $item)
        {
            $total += $item['Item']['precio'];
        }

        $this->request->data['Pedido']['total'] = $total;

        if ($this->Pedido->save($this->data))
        {
            //$ultimoPedido = $this->Pedido->getLastInsertID();
            //debug($ultimoPedido);exit;
            //echo $ultimoPedido;
            //exec("D:\imprime\AppImpresion.exe");
            $pedidosNoImpresos = $this->Pedido->find('all', array('recursive' => -1, 'conditions' => array('Pedido.estado' => 0)));

            /*foreach($pedidosNoImpresos as $pni)
            {
            echo $pni['Pedido']['id']."-".$pni['Pedido']['estado'];
            exec("D:\imprime\AppImpresion.exe");
            sleep(1);
            }*/
            /*if(!empty($pedidosNoImpresos))
            {
            //exec("D:\imprime\AppImpresion.exe");
            }*/
            $this->Session->setFlash('Pedido Registrado');
            $this->redirect(array('action' => 'listadopedidos'));
        }
        //$this->request->data['Pedido']['']=
        /* $fecha = date('Y-m-d H:i:s');
        $mesas = $this->PedidosMesa->find('first', array('order'=>'PedidosMesa.id DESC'));
        //debug($mesas);
        if(!empty($mesas)){
        $ultima_mesa = $mesas['PedidosMesa']['mesa'];
        $nueva_mesa = ++$ultima_mesa;
        }else{
        $nueva_mesa=1;
        } */
        /* $this->request->data['PedidosMesa']['pedido_id']=$pedido;
        $this->request->data['PedidosMesa']['mesa']=$nueva_mesa;
        $this->request->data['PedidosMesa']['fecha']=$fecha;
        $this->request->data['PedidosMesa']['estado']=0;
        //debug($this->data);
        //debug($pedido);
        if($this->PedidosMesa->save($this->data)){
        $this->Session->setFlash('Pedido Registrado');
        $this->redirect(array('action'=>'listadopedidos'));
        }else{
        $this->Session->setFlash('Pedido No se Pudo registrar');
        } */
    }

    public function entregarmesa($id_ped = null)
    {
        $this->Pedido->id = $id_ped;
        $this->request->data['Pedido']['estado'] = 1;
        if ($this->Pedido->save($this->data))
        {
            $this->Session->setFlash('Ficha entregada');
            $this->redirect(array('action' => 'asignacionmesa'));
        }
        else
        {
            $this->Session->setFlash('No se registro la transaccion');
        }
        //debug($this->data);
    }

    public function detallemimesa($id_pedido = null)
    {
        $mesa = $this->Pedido->find('first');
    }

    public function asignacionmesa()
    {
        //if($this)
        $pedidos = $this->Pedido->find('all', array('conditions' => array('Pedido.estado' => false), 'recursive' => 0));
        //$pedidos = $this->Pedido->find('all', array('conditions'=>'', 'recursive'=>0));
        //$this->set(compact('pedidos'));
        //debug($pedidos);
        $this->set(compact('pedidos'));
        //$pedidos = $this->Pedido->find('all', array('conditions'=>'', 'recursive'=>0));
        //debug($pedidos);
        //$pedidos = $this->Pedido->find('all', array('conditions'=>'', 'recursive'=>0));
        //$this->set(compact('pedidos', 'nueva_mesa'));
        //debug($pedidos);
    }

    public function mismesas()
    {
        if (!empty($this->data))
        {
            $num = $this->data['Pedidos']['numero'];
            $verif = $this->Usuario->find('first', array('conditions' => array('Usuario.codigo' => $num), 'recursive' => -1));
            $id_moso = $verif['Usuario']['id'];
            //debug($verif);
            if ($verif)
            {
                $this->redirect(array('action' => 'listadomesas', $id_moso));
            }
        }
        else
        {
            //$this->Session->setFlash("No existen datos");
        }
    }

    public function listadomesas($id_moso = null)
    {
        $hoy = date('Y-m-d');
        App::uses('CakeTime', 'Utility');
        $dia = CakeTime::dayAsSql($hoy, 'fecha');
        $mesas = $this->Pedido->find('all', array('conditions' => array('Pedido.usuario_id' => $id_moso, $dia), 'recursive' => -1));
        //debug($mesas);
        $this->set(compact('mesas'));
    }

    public function ingreso()
    {

    }

    public function listadopedidos()
    {
        //$pedidos = $this->Pedido->find('all', array('conditions' => array('Pedido.estado' => 1)));
        $pedidos = $this->Item->find('all', array('order' => 'Item.Id DESC'));
        //debug($pedidos);
        //debug($pedidos);
    }

    public function listadocosina()
    {
        $pedidos = $this->Item->find('all', array('order' => 'Item.Id DESC'));
        //debug($pedidos);
        $this->set(compact('pedidos'));
    }

    public function verificamoso()
    {
        //debug($this->data);
        if (!empty($this->data))
        {
            $num = $this->data['Pedidos']['numero'];
            $verif = $this->Usuario->find('first', array('conditions' => array('Usuario.codigo' => $num, 'Usuario.estado_id' => 1), 'recursive' => -1));
            if (!empty($verif))
            {
                $fecha_ayer = date("Y-m-d", strtotime("yesterday"));
                $fecha_hoy = date("Y-m-d");
                //echo "la fecha hoy es ".$fecha_hoy."<br />";
                //echo "la fecha es ".$fecha_ayer;
                $fecha = date('Y-m-d H:i:s');
                //if($fecha_ayer == $fecha_hoy){
                //}
                $this->data = "";
                $id_moso = $verif['Usuario']['id'];
                $pedido = $this->Pedido->find('first', array('order' => 'Pedido.id DESC'));
                $pedido_fecha = $pedido['Pedido']['fecha'];
                $caracteres = preg_split('/ /', $pedido_fecha);
                $fecha_ul_ped = $caracteres['0'];
                //echo 'la fecha del ultimo pedido es '.$fecha_ul_ped;
                if ($fecha_ul_ped == $fecha_hoy)
                {
                    //echo 'son iguales';
                    $m = $pedido['Pedido']['mesa'];
                    $mesa = ++$m;
                }
                else
                {
                    //echo 'no se parecen';
                    $mesa = 1;
                }
                //debug($caracteres);
                //debug($pedido);exit;
                //if(empty($pedido)){
                //$mesa = 1;
                //}else{
                //}
                //debug($ul_pedido);exit;
                $ultimoPedido = $this->Pedido->find('first', array('recursive' => -1, 'order' => 'Pedido.id DESC'));

                $hoy = date('Y-m-d');
                //debug($ultimoPedido);exit;

                $this->request->data['Pedido']['usuario_id'] = $verif['Usuario']['id'];
                $this->request->data['Pedido']['fecha'] = $fecha;
                $this->request->data['Pedido']['mesa'] = $mesa;
                //$mesa = $this->Pedido->find('neighbors', array('field' => 'id', 'value' => $ul_pedido, 'recursive' => -1));
                $this->Pedido->create();
                if ($this->Pedido->save($this->data))
                {
                    $ul_pedido = $this->Pedido->getLastInsertID();
                    //insertamos la mesa creada
                    //$this->Pedido->id = $ul_pedido;
                    //$this->request->data['Pedido']['mesa'];
                    $this->redirect(array(
                        'action' => 'pedidomoso',
                        $id_moso,
                        $ul_pedido,
                        $mesa));
                }
                //debug($this->data);exit;
            }
            else
            {
                $this->Session->setFlash('Codigo erroneo o no habil, Vuelva a intentarlo');
            }
            //echo $num;
            //debug($verif);
        }
        else
        {

        }
    }

    public function cancelarpedido($pedido = null, $mesa = null)
    {
        $this->layout = 'ajax';
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $pedido), 'recursive' => 3));
        foreach ($items as $item)
        {
            $cantidad = $item['Item']['cantidad'];
            $porciones = $item['Producto']['Porcione'];
            foreach ($porciones as $p)
            {
                $cantidadporcion = $p['cantidad'];
                $cantidadresta = $cantidadporcion * $cantidad;
                $bodega = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' => $p['insumo_id']), 'order' => array('Bodega.id desc')));
                $this->Bodega->id = $bodega['Bodega']['id'];
                $this->Bodega->read();
                $this->request->data['Bodega']['salida'] = $bodega['Bodega']['salida'] - $cantidadresta;
                $this->request->data['Bodega']['total'] = $bodega['Bodega']['total'] + $cantidadresta;
                $this->Bodega->save($this->data);
            }
        }
        $this->Pedido->delete($pedido);
        $this->Session->setFlash("Se cancelo el pedido " . $pedido . " de la mesa " . $mesa);
        $this->redirect(array('action' => 'listadopedidos'));
    }

    public function ajaxlistado($id_moso = null, $id_prod = null, $pedido = null, $mesa = null)
    {

        $this->layout = 'ajax';
        /*         * ********************************************* */
        /*   Porciones productos y reservas de bodega   */
        /*         * ********************************************* */

        $porciones = $this->Porcione->find('all', array(
            'conditions' => array('Porcione.producto_id' => $id_prod),
            'order' => array('Porcione.producto_id ASC'),
            'recursive' => -1));

        //$cantidadPorcion = $porciones['Porcione']['cantidad'];

        $producto = $this->Producto->find('first', array('conditions' => array('Producto.id' => $id_prod)));
        $producto = $producto['Producto']['nombre'];

        if (empty($porciones))
        {
            $this->Session->setFlash('No existen insumos del producto ' . $producto);
            $control = 1;
        }
        else
        {
            $i = 0;
            $control = 0;
            //debug($porciones);exit;
            foreach ($porciones as $porcion)
            {
                $items = $this->Bodega->find('first', array(
                    'conditions' => array('Bodega.insumo_id' => $porcion['Porcione']['insumo_id']), 
                    'order' => array('Bodega.id DESC')
                ));

                //$cantidadPorcion = $this->Porcione->find('all', array(
                    //'conditions' => array('Porcione.producto_id' => $id_prod, 'Porcione.insumo_id'=>),                    
                    //'recursive' => -1));
                //debug($items);exit;
                if (!empty($items))
                {
                    if ($items['Bodega']['total'] == 0)
                    {
                        $this->Session->setFlash('Ya no hay el insumo ' . $items['Insumo']['nombre']);
                        $control++;
                    }
                    else
                    {
                        $fecha = date('Y-m-d');
                        //$this->Bodega->id = $items['Bodega']['id'];
                        $this->Bodega->create();
                        if ($items['Bodega']['fecha'] == $fecha)
                        {
                            $this->request->data['Bodega']['fecha'] = $fecha;
                            $this->request->data['Bodega']['preciocompra'] = $items['Bodega']['preciocompra'];
                            $this->request->data['Bodega']['insumo_id'] = $items['Bodega']['insumo_id'];
                            //$this->request->data['Bodega']['salida'] = $items['Bodega']['salida'] + 1;
                            $this->request->data['Bodega']['total'] = $items['Bodega']['total'] - $porcion['Porcione']['cantidad'];
                            $this->request->data['Bodega']['salida'] = $porcion['Porcione']['cantidad'];
                            //debug($this->request->data);
                            //debug($id_prod);
                            //exit;
                            $this->Bodega->save($this->data);
                        }
                        else
                        {
                            $this->request->data['Bodega']['fecha'] = $fecha;
                            $this->request->data['Bodega']['preciocompra'] = $items['Bodega']['preciocompra'];
                            $this->request->data['Bodega']['insumo_id'] = $items['Bodega']['insumo_id'];
                            $this->request->data['Bodega']['salida'] = $porcion['Porcione']['cantidad'];
                            $this->request->data['Bodega']['ingreso'] = 0;
                            $this->request->data['Bodega']['total'] = $items['Bodega']['total'] - $porcion['Porcione']['cantidad'];
                            $this->Bodega->save($this->data);
                        }
                    }
                }
                else
                {
                    $this->Session->setFlash('No quedan existencias');
                    $control++;
                }
            } //end foreach
        } //end else principal
        //debug($control);exit;
        if ($control == 0)
        {
            $fecha = date('Y-m-d H:i:s');
            $this->request->data['Item']['pedido_id'] = $pedido;
            $this->request->data['Item']['producto_id'] = $id_prod;
            //$this->request->data['Pedido']['usuario_id'] = $id_moso;
            $this->request->data['Item']['fecha'] = $fecha;
            $productos = $this->Producto->find('first', array('conditions' => array('Producto.id' => $id_prod), 'recursive' => -1));
            $precio_prod = $productos['Producto']['precio'];
            $plato_pedido = $this->Item->find('first', array(
                'conditions' => array('Item.pedido_id' => $pedido, 'Item.producto_id' => $id_prod), 
                'recursive' => -1
            ));
            if (!empty($plato_pedido))
            {
                //$precio =
                $cantidad_encontrada = $plato_pedido['Item']['cantidad'];
                $cantidad = $cantidad_encontrada + 1;
                $precio = $cantidad * $precio_prod;
                $id = $plato_pedido['Item']['id'];
                $this->data = "";
                $this->Item->id = $id;
                $this->request->data['Item']['cantidad'] = $cantidad;
                $this->request->data['Item']['precio'] = $precio;
                //debug($this->data);exit;
                if ($this->Item->save($this->data))
                {
                    $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
                    $cant_platos = $this->Item->find('all', array(
                        'conditions' => array('pedido_id' => $pedido),
                        'recursive' => -1,
                        'fields' => array('SUM(Item.cantidad) as cantidad')));
                    //debug($cant_platos);
                    $this->set(compact('items', 'pedido', 'mesa', 'cant_platos'));
                }
                //debug($cantidad_encontrada);
            }
            else
            {
                $this->request->data['Item']['precio'] = 1 * $precio_prod;
                $this->request->data['Item']['cantidad'] = 1;
                if ($this->Item->save($this->data))
                {
                    $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
                    $cant_platos = $this->Item->find('all', array(
                        'conditions' => array('pedido_id' => $pedido),
                        'recursive' => -1,
                        'fields' => array('SUM(Item.cantidad) as cantidad')));
                    //debug($items);exit;
                    $this->set(compact('items', 'pedido', 'mesa', 'cant_platos'));
                }
            }
            //fin guardar plato o item
        }
        else
        {
            $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
            $cant_platos = $this->Item->find('all', array(
                'conditions' => array('pedido_id' => $pedido),
                'recursive' => -1,
                'fields' => array('SUM(Item.cantidad) as cantidad')));
            $this->set(compact('items', 'pedido', 'mesa', 'cant_platos', 'producto'));
        }
    }

    //fin funcio ajaxliatado

    function formingresoalmacen()
    {
        if (!empty($this->data))
        {
            // debug($this->data);exit;
            $num = $this->data['Pedidos']['numero'];
            $verif = $this->Usuario->find('first', array('conditions' => array('Usuario.codigo' => $num), 'recursive' => -1));
            $id_moso = $verif['Usuario']['id'];
            //debug($verif);exit;
            if ($verif)
            {
                $this->redirect(array(
                    'controller' => 'pedidos',
                    'action' => 'registroalmacen',
                    $id_moso));
            }
        }
        else
        {
            //$this->Session->setFlash("No existen datos");
        }
    }

    function registroalmacen($mozo = null)
    {
        $this->layout = 'pedidos';
        $insumos = $this->Insumo->find('all', array(
            'recursive' => 0,
            'conditions' => array('Insumo.estado' => 1),
            'order' => array('Insumo.id' => 'DESC'),
            'limit' => 5));
        $this->set(compact('insumos', 'mozo'));
        if (!empty($this->data))
        {
            $id = $this->data['Pedido']['insumo_id'];
            $insumo = $this->Insumo->findById($id);
            //debug($insumo);exit;
            $nombre_insumo = $insumo['Insumo']['nombre'];
            $precio_compra = $insumo['Insumo']['preciocompra'];
            $total = $insumo['Insumo']['total'];
            $cantidad_solicitada = $this->data['Pedido']['cantidad'];
            $this->data = '';
            $almacen = $this->Almacen->find('first', array('conditions' => array('Almacen.insumo_id' => $id), 'order' => array('Almacen.id DESC')));
            if ($total == 0)
            {
                $this->Session->setFlash("No le queda " . $nombre_insumo);
                $this->redirect(array('action' => 'registroalmacen', $mozo));
            }
            $this->Almacen->create();
            $this->request->data['Almacen']['insumo_id'] = $id;
            $this->request->data['Almacen']['preciocompra'] = $precio_compra;
            $this->request->data['Almacen']['salida'] = $cantidad_solicitada;
            $this->request->data['Almacen']['total'] = $total - $cantidad_solicitada;
            $this->request->data['Almacen']['fecha'] = date('Y-m-d');
            $this->request->data['Almacen']['usuario_id'] = $mozo;
            if ($this->Almacen->save($this->data))
            {
                $bodega = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' => $id), 'order' => array('Bodega.id DESC')));
                $this->data = '';
                $this->Bodega->create();
                $this->request->data['Bodega']['insumo_id'] = $id;
                $this->request->data['Bodega']['preciocompra'] = $precio_compra;
                $this->request->data['Bodega']['fecha'] = date('Y-m-d');
                if (empty($bodega))
                {
                    $this->request->data['Bodega']['total'] = $cantidad_solicitada;
                    $this->request->data['Bodega']['ingreso'] = $cantidad_solicitada;
                }
                else
                {
                    $total_bodega = $bodega['Bodega']['total'];
                    $this->request->data['Bodega']['ingreso'] = $cantidad_solicitada;
                    $this->request->data['Bodega']['total'] = $total_bodega + $cantidad_solicitada;
                }
                if ($this->Bodega->save($this->data))
                {
                    $this->Session->setFlash("Se sacaron " . $cantidad_solicitada . " " . $nombre_insumo);
                    $this->redirect(array('action' => 'registroalmacen', $mozo));
                }
            }
        }
    }

    public function salidalmacen($id = null, $mozo = null)
    {
        $this->layout = 'ajax';
        if (!empty($this->data))
        {
            $cant_salida = $this->data['Movimiento']['salida'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo)
            {
                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior - $cant_salida;
                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;
                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }
                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['usuario_id'] = $mozo;
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['salida'] = $cant_salida;
                $this->request->data['Almacen']['total'] = $cant_actual;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    //$this->redirect(array('action' => 'index'));
                }
                $existe_insumo_bodega = $this->Bodega->find('first', array(
                    'conditions' => array('insumo_id' => $id_insumo),
                    'order' => 'id DESC',
                    'recursive' => -1));
                if ($existe_insumo_bodega)
                {
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo), 'recursive' => -1));
                    $this->data = "";
                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    //$this->Insumo
                    //$this->Insumo->id=$id_mod_insumo;
                    if ($this->Insumo->save($this->data))
                    {

                    }
                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_bodega_actual;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();
                    if ($this->Bodega->save($this->data))
                    {
                        $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                    }
                    else
                    {
                        echo "no guardo";
                    }
                }
                else
                {
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo), 'recursive' => -1));
                    $this->data = "";
                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    $this->Insumo->id = $id_mod_insumo;
                    if ($this->Insumo->save($this->data))
                    {

                    }
                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_salida;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();
                    if ($this->Bodega->save($this->data))
                    {
                        $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                    }
                    else
                    {
                        echo "no guardo";
                    }
                }
            }
            else
            {
                //$this->data="";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_salida;
                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }
                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['ingreso'] = $cant_entrada;
                $this->request->data['Almacen']['total'] = $cant_entrada;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                }
            }
            //debug($this->data);
        }
        else
        {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id), 'recursive' => -1));
            $ce = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($insumo);
            $this->set(compact('insumo', 'ce'));
        }
    }

}

?>