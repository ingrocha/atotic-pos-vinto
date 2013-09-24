<?php

App::uses('AppController', 'Controller');

/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property SessionComponent $Session
 * @property AclComponent $Acl
 */
class PedidosController extends AppController {

    public $helpers = array('Form', 'Html');
    public $components = array('Session');
    public $uses = array(
        'User',
        'Producto',
        'Pedido',
        'Categoria',
        'Item',
        'Insumo',
        'PedidosMesa',
        'Porcione',
        'Bodega',
        'Almacen',
        'Lugare',
        'Clase',
        'Productosobservacione');
    public $layout = 'mosos';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function index() {
        $this->Pedido->recursive = 0;
        $this->set('pedidos', $this->paginate());
    }

    public function pedidomoso($id_moso = null, $pedido = null, $mesa = null, $anadido = null) {

        $this->layout = 'interfazmosos';
        if ($anadido == null) {
            $anadido = 0;
        }

        $datosClases = $this->Clase->find('all', array(
            'recursive' => -1,
            'order' => 'Clase.orden'
        ));

        $datosProductos = $this->Producto->find('all', array(
            'recursive' => -1,
            'order' => array('Producto.categoria_id')
        ));

        $categorias = $this->Categoria->find('all', array(
            'recursive' => -1,
            'conditions' => array('estado' => 1),
            'order' => array('Categoria.tipo DESC')));

        $productos = $this->Producto->find('all', array(
            'recursive' => -1,
            'order' => 'id DESC',
            'conditions' => array('estado' => 1)));

        $porciones = $this->Porcione->find('all');

        $items_pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido, 'Item.estado' => $anadido)));
        //debug($items_pedido);exit;
        $cant_platos = $this->Item->find('all', array(
            'recursive' => -1,
            'conditions' => array('Item.pedido_id' => $pedido, 'Item.estado' => 1),
            'fields' => ('SUM(cantidad) as cant')));

        $datosMoso = $this->User->find('first', array('recursive' => -1, 'conditions' =>
            array('id' => $id_moso)));
        //debug($moso);exit;
        $this->set(compact(
                        'anadido', 'productos', 'id_moso', 'pedido', 'categorias', 'mesa', 'items_pedido', 'cant_platos', 'datosMoso', 'datosClases', 'datosProductos'
        ));
    }

    //aqui un cambio
    //de muestra
    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        $this->set('pedido', $this->Pedido->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Pedido->create();
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash(__('The pedido has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
            }
        }
        $platos = $this->Pedido->Plato->find('list');
        $usuarios = $this->Pedido->User->find('list');
        $this->set(compact('platos', 'usuarios'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Pedido->save($this->request->data)) {
                $this->Session->setFlash(__('The pedido has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Pedido->read(null, $id);
        }
        $platos = $this->Pedido->Plato->find('list');
        $usuarios = $this->Pedido->User->find('list');
        $this->set(compact('platos', 'usuarios'));
    }

    public function verdetalle($id_ped = nulll) {
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $id_ped)));
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
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Pedido->id = $id;
        if (!$this->Pedido->exists()) {
            throw new NotFoundException(__('Invalid pedido'));
        }
        if ($this->Pedido->delete()) {
            $this->Session->setFlash(__('Pedido deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Pedido was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function restarproductojefe($id_item = null, $mesa = null) {
        $this->layout = 'ajax';
        $item = $this->Item->findById($id_item);
        $precio = $item['Item']['precio'] - $item['Producto']['precio'];
        $id_prod = $item['Item']['producto_id'];
        $cantidad = $item['Item']['cantidad'] - 1;
        $pedido = $item['Item']['pedido_id'];

        if ($item == null || $precio < 0) {
            $this->Session->setFlash('No puede restar mas items', 'alerts/advertencia');
        } else {


            if ($item['Item']['cantidad'] == 1) {
                $this->Item->delete($id_item);
            } else {
                //debug($precio);
                //debug($cantidad);
                $this->Item->id = $id_item;
                $this->Item->read();
                $this->request->data['Item']['cantidad'] = $cantidad;
                $this->request->data['Item']['precio'] = $precio;
                //debug($this->data);
                $this->Item->save($this->request->data);
            }

            /*             * ********************************************* */
            /*   Porciones productos y reservas de bodega   */
            /*             * ********************************************* */
            $porciones = $this->Porcione->find('all', array(
                'conditions' => array('Porcione.producto_id' => $id_prod),
                'order' => array('Porcione.producto_id ASC'),
                'recursive' => -1));
            //debug($porciones);exit;
            foreach ($porciones as $porcion) {
                $item = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' =>
                        $porcion['Porcione']['insumo_id']), 'order' => array('Bodega.id desc')));
                //debug($item);exit;
                $this->Bodega->id = $item['Bodega']['id'];
                $this->Bodega->read();
                $verif = $item['Bodega']['salida'] - 1;
                if ($verif < 0) {
                    $verif = 0;
                }
                $this->request->data['Bodega']['salida'] = $verif;
                $this->request->data['Bodega']['total'] = $item['Bodega']['total'] + 1;
                $this->Bodega->save($this->data);
            }
        }


        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido)));

        /*         * ***************fin actualiza bodega****************************** */
        $cant_platos = $this->Item->find('all', array(
            'conditions' => array('pedido_id' => $pedido),
            'recursive' => -1,
            'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);exit;
        $this->set(compact('items', 'pedido', 'cant_platos', 'mesa'));
    }

    public function restarproducto($id_item = null, $mesa = null, $anadido = null) {
        $this->layout = 'ajax';
        $item = $this->Item->findById($id_item);

        $validacantidad = $item['Item']['cantidad'];


        if (!empty($item) && ($validacantidad > 0 || $validacantidad != null)) {

            $precio = $item['Item']['precio'] - $item['Producto']['precio'];
            $id_prod = $item['Item']['producto_id'];
            $cantidad = $item['Item']['cantidad'] - 1;
            $pedido = $item['Pedido']['id'];
            $pedidodatos = $this->Pedido->findById($pedido);
            $id_moso = $pedidodatos['Pedido']['user_id'];
            $mesa = $pedidodatos['Pedido']['mesa'];

            if ($item['Item']['cantidad'] == 1) {
                $this->Item->delete($id_item);
            } else {
                //debug($precio);
                //debug($cantidad);
                $this->Item->id = $id_item;
                $this->Item->read();
                $this->request->data['Item']['cantidad'] = $cantidad;
                $this->request->data['Item']['precio'] = $precio;
                //debug($this->data);exit;
                $this->Item->save($this->data);
            }
            /*             * ********************************************* */
            /*   Porciones productos y reservas de bodega   */
            /*             * ********************************************* */
            $porciones = $this->Porcione->find('all', array(
                'conditions' => array('Porcione.producto_id' => $id_prod),
                'order' => array('Porcione.producto_id ASC'),
                'recursive' => -1));
            //debug($porciones);exit;
            foreach ($porciones as $porcion) {
                $item = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' =>
                        $porcion['Porcione']['insumo_id']), 'order' => array('Bodega.id desc')));
                //debug($item);exit;
                $this->Bodega->id = $item['Bodega']['id'];
                $this->Bodega->read();
                $verif = $item['Bodega']['salida'] - 1;
                if ($verif < 0) {
                    $verif = 0;
                }
                $this->request->data['Bodega']['salida'] = $verif;
                $this->request->data['Bodega']['total'] = $item['Bodega']['total'] + 1;
                $this->Bodega->save($this->data);
            }
            /*             * ***************fin actualiza bodega****************************** */
            $this->Session->setFlash('Item restado', 'alerts/bueno');

            $this->redirect(array('action' => 'ajaxdetallerestar', $id_moso, $pedido, $mesa, $anadido));
        } else {
            $this->Session->setFlash('RESTO DEMAS: Tenga mas cuidado al restar sus productos!!!!', 'alerts/error');
            $this->redirect(array('action' => 'ajaxdetallerestar', $idPedido, $anadido));
        }
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido, 'Item.estado' => $anadido)));

        $cant_platos = $this->Item->find('all', array(
            'conditions' => array('pedido_id' => $pedido, 'estado' => $anadido),
            'recursive' => -1,
            'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);exit;
        $this->set(compact('items', 'pedido', 'cant_platos', 'mesa', 'anadido'));
    }

    public function ajaxdetallerestar($idMoso = null, $pedido = null, $mesa = null, $anadido = null) {
        $this->layout = 'ajax';
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido, 'Item.estado' => $anadido)));

        $cant_platos = $this->Item->find('all', array(
            'conditions' => array('pedido_id' => $pedido, 'estado' => $anadido),
            'recursive' => -1,
            'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);exit;
        $datosMoso = $this->User->find('first', array('User.id' => $idMoso));
        $this->set(compact('items', 'pedido', 'cant_platos', 'mesa', 'anadido', 'datosMoso'));
    }

    public function muestrarestado($pedido = null, $anadido = null) {
        if ($anadido == null) {
            $anadido = 0;
        }
        $categorias = $this->Categoria->find('all', array(
            'recursive' => -1,
            'conditions' => array('estado' => 1),
            'order' => array('Categoria.tipo DESC')));
        $productos = $this->Producto->find('all', array(
            'recursive' => -1,
            'order' => 'id DESC',
            'conditions' => array('estado' => 1)));

        $porciones = $this->Porcione->find('all');

        $items_pedido = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido, 'Item.estado' => $anadido)));
        //debug($items_pedido);exit;
        $cant_platos = $this->Item->find('all', array(
            'recursive' => -1,
            'conditions' => array('Item.pedido_id' => $pedido, 'Item.estado' => 1),
            'fields' => ('SUM(cantidad) as cant')));

        $datosMoso = $this->User->find('first', array('recursive' => -1, 'conditions' =>
            array('id' => $id_moso)));
        //debug($moso);exit;


        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido, 'Item.estado' => $anadido)));

        $cant_platos = $this->Item->find('all', array(
            'conditions' => array('pedido_id' => $pedido, 'estado' => $anadido),
            'recursive' => -1,
            'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);exit;
        $this->set(compact('anadido', 'productos', 'id_moso', 'pedido', 'categorias', 'mesa', 'items_pedido', 'cant_platos', 'datosMoso'));
        //$this->set(compact('items', 'pedido', 'cant_platos', 'mesa', 'anadido'));
    }

    public function registrarpedido($id_moso = null, $idPedido = null, $total = null, $anadido = null) {
        $this->Pedido->id = $idPedido;

        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $idPedido)));
        //debug($items);exit;
        $total = 0;

        foreach ($items as $item) {
            $total += $item['Item']['precio'];
        }

        $this->request->data['Pedido']['total'] = $total;

        if ($this->Pedido->save($this->request->data)) {
            if ($anadido == 1) {
                $data = array('id' => $idPedido, 'estado' => 5);
                $this->Pedido->save($data);
            }
            $this->Session->setFlash('Pedido Registrado', 'alerts/bueno');
            $this->regularizapedido($idPedido, $anadido);
            $this->redirect(array('controller' => 'pedidos', 'action' => 'validamoso'));
            /**
             * $this->redirect(array(
             *                 'action' => 'muestrapedido',
             *                 $id_moso,
             *                 $idPedido,
             *                 $anadido));
             */
        } else {
            $this->Session->setFlash('ERROR EN REGISTRO', 'alerts/alerta');

            $this->redirect(array('controller' => 'pedidos', 'action' => 'validamoso'));
        }
    }

    public function muestrapedido($idMoso = null, $idPedido = null, $anadido = null) {

        $datosPedido = $this->Pedido->find('first', array('recursive' => -1,
            'conditions' => array('Pedido.id' => $idPedido)));

        $itemsPedido = $this->Item->find('all', array('recursive' => 0, 'conditions' =>
            array('Item.pedido_id' => $idPedido, 'Item.estado' => $anadido)));
        $hoy = date('Y-m-d');
        App::uses('CakeTime', 'Utility');
        $dia = CakeTime::dayAsSql($hoy, 'fecha');
        $datosMoso = $this->User->find('first', array('conditions' => array('User.id' =>
                $idMoso, 'User.role like ' => '%Jefe%')));
        //debug($datosMoso);
        //if($anadido==1){
        //            exec("C:\print\AppImpresion.exe");
        //        }else{
        //            exec("C:\imprime\AppImpresion.exe");
        //        }
        if (!empty($datosMoso)) {
            $mesas = $this->Pedido->find('all', array('conditions' => array($dia,
                    'Pedido.estado' => array('0', '1')), 'recursive' => -1));
        } else {
            $datosMoso = $this->User->find('first', array('conditions' => array('User.id' =>
                    $idMoso), 'recursive' => -1));

            $mesas = $this->Pedido->find('all', array('conditions' => array(
                    $dia,
                    'Pedido.estado' => array(
                        '0',
                        '1',
                        '5'),
                    'Pedido.user_id' => $idMoso), 'recursive' => -1));
        }
        //debug($datosMoso);
        //debug($mesas);exit;
        $this->set(compact('mesas', 'datosMoso', 'itemsPedido', 'datosPedido', 'anadido'));


        $this->regularizapedido($idPedido, $anadido);
    }

    function regularizapedido($pedidoId = null, $anadido = null) {

        if ($anadido == 1) {
            //echo 'entro';exit;
            exec("C:\print\AppImpresion.exe");

            $datospedido = $this->Pedido->find('first', array('conditions' => array('Pedido.id' =>
                    $pedidoId)));

            if ($datospedido['Pedido']['estado'] == 5) {
                $data = array('id' => $pedidoId, 'estado' => 1);
                $this->Pedido->save($data);
            }

            $anadidos = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                    $pedidoId, 'Item.estado' => 1)));

            foreach ($anadidos as $a) {

                $plato_pedido = $this->Item->find('first', array('conditions' => array(
                        'Item.pedido_id' => $pedidoId,
                        'Item.producto_id' => $a['Item']['producto_id'],
                        'Item.estado' => 0)));

                $data = "";

                if (!empty($plato_pedido)) {
                    $precio_prod = $plato_pedido['Producto']['precio'];
                    $cantidad_encontrada = $plato_pedido['Item']['cantidad'];
                    $cantidad = $cantidad_encontrada + $a['Item']['cantidad'];
                    $precio = $cantidad * $precio_prod;
                    $id = $plato_pedido['Item']['id'];
                    $data = array(
                        'id' => $id,
                        'cantidad' => $cantidad,
                        'precio' => $precio,
                        'estado' => 0);
                    //debug($data);
                    //$this->Item->save($data);
                } else {
                    $data = array('id' => $a['Item']['id'], 'estado' => 0);
                    //debug($data);
                    //$this->Item->save($data);
                }
                //debug($data);
                $this->Item->save($data);
            }

            $this->Item->deleteAll(array('Item.estado' => 1, 'Item.pedido_id' => $pedidoId));
        } else {

            //imprime las comandas
            exec("C:\imprime\AppImpresion.exe");
        }
    }

    public function entregarmesa($id_ped = null) {
        $this->Pedido->id = $id_ped;
        $this->request->data['Pedido']['estado'] = 1;
        if ($this->Pedido->save($this->data)) {
            $this->Session->setFlash('Ficha entregada');
            $this->redirect(array('action' => 'asignacionmesa'));
        } else {
            $this->Session->setFlash('No se registro la transaccion');
        }
        //debug($this->data);
    }

    public function detallemimesa($id_pedido = null) {
        $mesa = $this->Pedido->find('first');
    }

    public function asignacionmesa() {
        //if($this)
        $pedidos = $this->Pedido->find('all', array('conditions' => array('Pedido.estado' => false),
            'recursive' => 0));
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

    public function mismesas($idMoso = null) {
        if (!empty($this->data)) {
            /* $num = $this->data['Pedidos']['numero'];
              $verif = $this->User->find('first', array('conditions' => array('User.codigo' =>
              $num), 'recursive' => -1));
              $id_moso = $verif['User']['id']; */
            //debug($verif);
            $this->redirect(array('action' => 'listadomesas', $id_moso));
        } else {
            //$this->Session->setFlash("No existen datos");
        }
    }

    public function listadomesas($id_moso = null) {
        $hoy = date('Y-m-d');
        App::uses('CakeTime', 'Utility');
        $dia = CakeTime::dayAsSql($hoy, 'fecha');
        $mesas = $this->Pedido->find('all', array('conditions' => array('Pedido.user_id' =>
                $id_moso, $dia), 'recursive' => -1));
        //debug($mesas);
        $this->set(compact('mesas'));
    }

    public function ingreso() {
        
    }

    public function listadopedidos() {
        //$pedidos = $this->Pedido->find('all', array('conditions' => array('Pedido.estado' => 1)));
        $pedidos = $this->Item->find('all', array('order' => 'Item.Id DESC'));
        //debug($pedidos);
        //debug($pedidos);
    }

    public function listadocosina() {
        $pedidos = $this->Item->find('all', array('order' => 'Item.Id DESC'));
        //debug($pedidos);
        $this->set(compact('pedidos'));
    }

    public function verificamoso($idMoso = null) {
        $fecha_ayer = date("Y-m-d", strtotime("yesterday"));
        $fecha_hoy = date("Y-m-d");
        //echo "la fecha hoy es ".$fecha_hoy."<br />";
        //echo "la fecha es ".$fecha_ayer;
        $fecha = date('Y-m-d H:i:s');
        //if($fecha_ayer == $fecha_hoy){
        //}
        $this->data = "";

        $id_moso = $idMoso;
        $pedido = $this->Pedido->find('first', array('fields' => array('MAX(Pedido.id) as id')));

        $idPedido = $pedido[0]['id'];
        //debug($idPedido);exit;

        $pedido = $this->Pedido->find('first', array('recursive' => -1, 'conditions' =>
            array('Pedido.id' => $idPedido)));
        $numeromesa = $pedido['Pedido']['mesa'];

        $pedido_fecha = $pedido['Pedido']['created'];

        if ($pedido_fecha == $fecha_hoy) {
            $m = $pedido['Pedido']['mesa'];
            $mesa = ++$m;
        } else {
            //echo 'no se parecen';
            $mesa = 1;
        }

        $this->request->data['Pedido']['user_id'] = $idMoso;
        $this->request->data['Pedido']['fecha'] = $fecha;
        $this->request->data['Pedido']['mesa'] = $mesa;
        $this->Pedido->create();
        if ($this->Pedido->save($this->request->data)) {
            $ul_pedido = $this->Pedido->getLastInsertID();
            //insertamos la mesa creada
            //$this->Pedido->id = $ul_pedido;
            //$this->request->data['Pedido']['mesa'];
            $this->redirect(array(
                'action' => 'pedidomoso',
                $id_moso,
                $ul_pedido,
                $mesa,
                0));
        }
    }

    public function cancelapedido($idUsuario = null, $pedido = null, $mesa = null) {
        $data = array(
            'id' => $pedido,
            'estado' => 6,
            'user_id' => $idUsuario);
        $this->Pedido->save($data);
        $this->Session->setFlash("Se cancelo el pedido #: " . $pedido . " de la mesa " .
                $mesa);
        $this->redirect(array('action' => 'menumoso', $idUsuario));
    }

    public function cancelarpedido($pedido = null, $mesa = null) {
        $this->layout = 'ajax';
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                $pedido), 'recursive' => 3));
        foreach ($items as $item) {
            $cantidad = $item['Item']['cantidad'];
            $porciones = $item['Producto']['Porcione'];
            foreach ($porciones as $p) {
                $cantidadporcion = $p['cantidad'];
                $cantidadresta = $cantidadporcion * $cantidad;
                $bodega = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' =>
                        $p['insumo_id']), 'order' => array('Bodega.id desc')));
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

    public function ajaxlistado($id_moso = null, $id_prod = null, $pedido = null, $mesa = null, $anadido = null) {
        $usuario = $this->User->find('count', array('conditions' => array('User.id' => $id_moso,
                'User.role like ' => "%Jefe%")));

        //debug($anadido);exit;
        $this->layout = 'ajax';
        /*         * ********************************************* */
        /* Porciones productos y reservas de bodega   */
        /*         * ********************************************* */

        $porciones = $this->Porcione->find('all', array(
            'conditions' => array('Porcione.producto_id' => $id_prod),
            'order' => array('Porcione.producto_id ASC'),
            'recursive' => -1));

        //$cantidadPorcion = $porciones['Porcione']['cantidad'];

        $producto = $this->Producto->find('first', array('conditions' => array('Producto.id' =>
                $id_prod)));
        $producto = $producto['Producto']['nombre'];

        if (empty($porciones)) {
            $this->Session->setFlash('No existen insumos del producto ' . $producto, 'alerts/advertencia');
            $control = 1;
        } else {
            $i = 0;
            $control = 0;
            //debug($porciones);exit;
            foreach ($porciones as $porcion) {
                $items = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' =>
                        $porcion['Porcione']['insumo_id']), 'order' => array('Bodega.id DESC')));

                //$cantidadPorcion = $this->Porcione->find('all', array(
                //'conditions' => array('Porcione.producto_id' => $id_prod, 'Porcione.insumo_id'=>),
                //'recursive' => -1));
                //debug($items);exit;
                if (!empty($items)) {
                    if ($items['Bodega']['total'] == 0) {
                        $this->Session->setFlash('Ya no hay el insumo ' . $items['Insumo']['nombre'], 'alerts/advertencia');
                        $control++;
                    } else {
                        $fecha = date('Y-m-d');
                        //$this->Bodega->id = $items['Bodega']['id'];
                        $this->Bodega->create();
                        if ($items['Bodega']['fecha'] == $fecha) {
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
                        } else {
                            $this->request->data['Bodega']['fecha'] = $fecha;
                            $this->request->data['Bodega']['preciocompra'] = $items['Bodega']['preciocompra'];
                            $this->request->data['Bodega']['insumo_id'] = $items['Bodega']['insumo_id'];
                            $this->request->data['Bodega']['salida'] = $porcion['Porcione']['cantidad'];
                            $this->request->data['Bodega']['ingreso'] = 0;
                            $this->request->data['Bodega']['total'] = $items['Bodega']['total'] - $porcion['Porcione']['cantidad'];
                            $this->Bodega->save($this->request->data);
                        }
                    }
                } else {
                    $this->Session->setFlash('No quedan existencias', 'alerts/advertencia');
                    $control++;
                }
            } //end foreach
        } //end else principal
        //debug($control);exit;
        if ($control == 0) {

            $fecha = date('Y-m-d H:i:s');
            $this->request->data['Item']['pedido_id'] = $pedido;
            $this->request->data['Item']['producto_id'] = $id_prod;
            $this->request->data['Item']['user_id'] = $id_moso;
            $this->request->data['Item']['fecha'] = $fecha;
            $productos = $this->Producto->find('first', array('conditions' => array('Producto.id' =>
                    $id_prod), 'recursive' => -1));
            $precio_prod = $productos['Producto']['precio'];

            $plato_pedido = $this->Item->find('first', array('conditions' => array(
                    'Item.pedido_id' => $pedido,
                    'Item.producto_id' => $id_prod,
                    'Item.estado' => $anadido), 'recursive' => -1));

            if (!empty($plato_pedido)) {

                $estado = $anadido;
                $cantidad_encontrada = $plato_pedido['Item']['cantidad'];
                $cantidad = $cantidad_encontrada + 1;
                $precio = $cantidad * $precio_prod;
                $id = $plato_pedido['Item']['id'];

                $this->request->data = "";
                $this->Item->id = $id;
                $this->request->data['Item']['cantidad'] = $cantidad;
                $this->request->data['Item']['precio'] = $precio;
                $this->request->data['Item']['estado'] = $anadido;
                $this->request->data['Item']['user_id'] = $id_moso;
                //debug($this->data);exit;
                if ($this->Item->save($this->request->data)) {
                    $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                            $pedido, 'Item.estado' => $anadido)));

                    $cant_platos = $this->Item->find('all', array(
                        'conditions' => array('Item.pedido_id' => $pedido, 'Item.estado' => $anadido),
                        'recursive' => -1,
                        'fields' => array('SUM(Item.cantidad) as cantidad')));
                    //debug($cant_platos);
                    $this->set(compact('items', 'pedido', 'mesa', 'cant_platos', 'anadido', 'id_moso', 'usuario'));
                }
                //debug($cantidad_encontrada);
            } else {
                $this->request->data['Item']['precio'] = 1 * $precio_prod;
                $this->request->data['Item']['cantidad'] = 1;
                $this->request->data['Item']['estado'] = $anadido;
                $this->request->data['Item']['user_id'] = $id_moso;
                if ($this->Item->save($this->request->data)) {
                    $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                            $pedido, 'Item.estado' => $anadido)));
                    $cant_platos = $this->Item->find('all', array(
                        'conditions' => array('Item.pedido_id' => $pedido, 'Item.estado' => $anadido),
                        'recursive' => -1,
                        'fields' => array('SUM(Item.cantidad) as cantidad')));
                    //debug($items);exit;
                    $this->set(compact('items', 'pedido', 'mesa', 'cant_platos', 'anadido', 'id_moso', 'usuario'));
                }
            }
            //fin guardar plato o item
        } else {
            $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' =>
                    $pedido, 'Item.estado' => $anadido)));
            $cant_platos = $this->Item->find('all', array(
                'conditions' => array('Item.pedido_id' => $pedido, 'Item.estado' => $anadido),
                'recursive' => -1,
                'fields' => array('SUM(Item.cantidad) as cantidad')));
            $this->set(compact('items', 'pedido', 'mesa', 'cant_platos', 'producto', 'anadido', 'id_moso', 'usuario'));
        }
    }

    //fin funcio ajaxliatado

    function formingresoalmacen() {
        
        if (!empty($this->data)) {
            // debug($this->data);exit;
            $num = $this->data['Pedidos']['numero'];
            $verif = $this->User->find('first', array('conditions' => array('User.codigo' =>
                    $num), 'recursive' => -1));
            $id_moso = $verif['User']['id'];
            //debug($verif);exit;
            if ($verif) {
                $this->redirect(array(
                    'controller' => 'pedidos',
                    'action' => 'registroalmacen',
                    $id_moso));
            }
        } else {
            //$this->Session->setFlash("No existen datos");
        }
    }

    function registroalmacen($mozo = null) {
        $this->layout = 'pedidos';
        $insumos = $this->Insumo->find('all', array(
            'recursive' => 0,
            'conditions' => array('Insumo.estado' => 1),
            'order' => array('Insumo.id' => 'DESC'),
            'limit' => 5));
        $this->set(compact('insumos', 'mozo'));
        if (!empty($this->data)) {
            $id = $this->data['Pedido']['insumo_id'];
            $insumo = $this->Insumo->findById($id);
            //debug($insumo);exit;
            $nombre_insumo = $insumo['Insumo']['nombre'];
            $precio_compra = $insumo['Insumo']['preciocompra'];
            $total = $insumo['Insumo']['total'];
            $cantidad_solicitada = $this->data['Pedido']['cantidad'];
            $this->data = '';
            $almacen = $this->Almacen->find('first', array('conditions' => array('Almacen.insumo_id' =>
                    $id), 'order' => array('Almacen.id DESC')));
            if ($total == 0) {
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
            if ($this->Almacen->save($this->data)) {
                $bodega = $this->Bodega->find('first', array('conditions' => array('Bodega.insumo_id' =>
                        $id), 'order' => array('Bodega.id DESC')));
                $this->data = '';
                $this->Bodega->create();
                $this->request->data['Bodega']['insumo_id'] = $id;
                $this->request->data['Bodega']['preciocompra'] = $precio_compra;
                $this->request->data['Bodega']['fecha'] = date('Y-m-d');
                if (empty($bodega)) {
                    $this->request->data['Bodega']['total'] = $cantidad_solicitada;
                    $this->request->data['Bodega']['ingreso'] = $cantidad_solicitada;
                } else {
                    $total_bodega = $bodega['Bodega']['total'];
                    $this->request->data['Bodega']['ingreso'] = $cantidad_solicitada;
                    $this->request->data['Bodega']['total'] = $total_bodega + $cantidad_solicitada;
                }
                if ($this->Bodega->save($this->data)) {
                    $this->Session->setFlash("Se sacaron " . $cantidad_solicitada . " " . $nombre_insumo);
                    $this->redirect(array('action' => 'registroalmacen', $mozo));
                }
            }
        }
    }

    public function salidalmacen($id = null, $mozo = null) {
        $this->layout = 'ajax';
        if (!empty($this->request->data)) {
            $cant_salida = $this->data['Movimiento']['salida'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo) {
                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior - $cant_salida;
                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;
                if (!$this->Insumo->save($this->data)) {
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
                if ($this->Almacen->save($this->data)) {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    //$this->redirect(array('action' => 'index'));
                }
                $existe_insumo_bodega = $this->Bodega->find('first', array(
                    'conditions' => array('insumo_id' => $id_insumo),
                    'order' => 'id DESC',
                    'recursive' => -1));
                if ($existe_insumo_bodega) {
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo),
                        'recursive' => -1));
                    $this->data = "";
                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    //$this->Insumo
                    //$this->Insumo->id=$id_mod_insumo;
                    if ($this->Insumo->save($this->data)) {
                        
                    }
                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_bodega_actual;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();
                    if ($this->Bodega->save($this->data)) {
                        $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                    } else {
                        echo "no guardo";
                    }
                } else {
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo),
                        'recursive' => -1));
                    $this->data = "";
                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    $this->Insumo->id = $id_mod_insumo;
                    if ($this->Insumo->save($this->data)) {
                        
                    }
                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_salida;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();
                    if ($this->Bodega->save($this->data)) {
                        $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                    } else {
                        echo "no guardo";
                    }
                }
            } else {
                //$this->data="";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_salida;
                if (!$this->Insumo->save($this->data)) {
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
                if ($this->Almacen->save($this->data)) {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('controller' => 'Pedidos', 'action' => 'listadopedidos'));
                }
            }
            //debug($this->data);
        } else {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id),
                'recursive' => -1));
            $ce = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($insumo);
            $lugares = $this->Lugar->find('list', array('fields' => array('Lugare.id',
                    'Lugare.nombre')));
            $this->set(compact('insumo', 'ce', 'lugares'));
        }
    }

    public function menumoso($idMoso = null) {
        //debug($idMoso);exit;
        //$this->layout = 'interfazmosos';
        $hoy = date('Y-m-d');
        App::uses('CakeTime', 'Utility');
        $dia = CakeTime::dayAsSql($hoy, 'fecha');
        $datosMoso = $this->User->find('first', array('conditions' => array('User.id' =>
                $idMoso, 'User.role like ' => '%Jefe%')));
        //debug($datosMoso);
        if (!empty($datosMoso)) {
            $mesas = $this->Pedido->find('all', array('conditions' => array($dia,
                    'Pedido.estado' => array('0', '1')), 'recursive' => -1));
        } else {
            $datosMoso = $this->User->find('first', array('conditions' => array('User.id' =>
                    $idMoso), 'recursive' => -1));

            $mesas = $this->Pedido->find('all', array('conditions' => array(
                    $dia,
                    'Pedido.estado' => array('0', '1'),
                    'Pedido.user_id' => $idMoso), 'recursive' => -1));
        }
        $this->set(compact('mesas', 'datosMoso'));
    }

    protected function _bodega($tipo = null) {
        $bodega = $this->Bodega->find('all', array(
            'fields' => array('max(Bodega.id) as id'),
            'conditions' => array('Insumo.tipo' => $tipo),
            'recursive' => 1,
            'group' => array('Bodega.insumo_id')));

        $ids = array();
        $i = 0;
        foreach ($bodega as $insumo) {
            foreach ($insumo as $id) {
                $ids[$i] = $id['id'];
            }
            $i++;
        }
        $bodega = $this->Bodega->find('all', array(
            'conditions' => array('Bodega.id' => $ids, 'Bodega.total <=' => 10),
            'recursive' => 1,
            'group' => array('Bodega.insumo_id'),
            'order' => array('Bodega.id ASC')));

        return ($bodega);
    }

    public function validamoso() {
        $this->layout = 'loginmoso';

        if (!empty($this->request->data)) {
            $codigo = $this->request->data['Pedidos']['numero'];

            if ($codigo != null) {

                $verificaMoso = $this->User->find('first', array('recursive' => -1, 'conditions' =>
                    array('User.codigo' => $codigo)));
                $idMoso = $verificaMoso['User']['id'];

                if (!empty($verificaMoso)) {
                    $this->redirect(array('action' => 'menumoso', $idMoso));
                } else {
                    $this->Session->setFlash('Clave Incorrecta!!!', 'alerts/alerta');
                    $this->redirect(array('action' => 'validamoso'));
                }
            } else {
                $this->Session->setFlash('Clave Incorrecta!!!', 'alerts/alerta');
                $this->redirect(array('action' => 'validamoso'));
            }
        } else {
            $comidas = $this->_bodega('comida');
            // debug($comidas);exit;
            $bebidas = $this->_bodega('bebida');
            $tragos = $this->_bodega('tragos');
            $postres = $this->_bodega('postres');
            //debug($postres);exit;
            $this->set(compact('comidas', 'bebidas', 'tragos', 'postres'));
        }
    }

    public function detallemesa($idPedido = null) {
        $this->layout = 'ajax';
        $datosPedido = $this->Pedido->find('first', array('recursive' => -1,
            'conditions' => array('Pedido.id' => $idPedido)));
        //debug($datosPedido);exit;
        $itemsPedido = $this->Item->find('all', array('recursive' => 0, 'conditions' =>
            array('Item.pedido_id' => $idPedido)));

        $this->set(compact('itemsPedido', 'datosPedido'));
    }

    public function detallemesajefe($idPedido = null, $id_moso = null) {
        $this->layout = 'ajax';
        $datosPedido = $this->Pedido->find('first', array('recursive' => -1,
            'conditions' => array('Pedido.id' => $idPedido)));
        $moso_actual = $datosPedido['Pedido']['user_id'];
        $datosMoso = $this->User->find('first', array('conditions' => array('User.id' =>
                $moso_actual)));
        $itemsPedido = $this->Item->find('all', array('recursive' => 0, 'conditions' =>
            array('Item.pedido_id' => $idPedido)));
        $mosos = $this->User->find('list', array('conditions' => array('User.role like' =>
                "%Moso%"), 'fields' => array('User.id', 'User.nombre')));
        $this->set(compact('itemsPedido', 'datosPedido', 'id_moso', 'datosMoso', 'mosos'));
    }

    public function reasignamesero() {
        //debug($this->request->data);exit;
        $idPedido = $this->request->data['Pedidos']['pedido'];
        $moso = $this->request->data['Pedidos']['moso'];
        $idMoso = $this->request->data['Pedidos']['id_moso'];
        $data = array('id' => $idPedido, 'user_id' => $moso);

        if ($this->Pedido->save($data)) {
            $this->Session->setFlash('Mesa reasignada', 'alerts/bueno');
            $this->redirect(array('action' => 'menumoso', $idMoso));
        } else {
            $this->Session->setFlash('Error no se pudo reasignar la mesa', 'alerts/bueno');
            $this->redirect(array('action' => 'menumoso', $idMoso));
        }
    }

    public function ajaxmuestraproductos($idCategoria = null) {
        $this->layout = 'ajax';
        $datosProductos = $this->Producto->find('all', array(
            'recursive' => -1,
            'conditions' => array('Producto.categoria_id' => $idCategoria)
        ));
        $this->set(compact('datosProductos'));
    }
        
    public function ajaxmuestraobservaciones($idProducto = null){        
        
        $this->layout = 'ajax';
        $datosObs = $this->Productosobservacione->find('all', array(
            'recursive'=>-1,
            'conditions'=>array('Productosobservacione.producto_id'=>$idProducto)
        ));
        $nombreProducto = $this->Producto->find('first', array(
            'recursive'=>-1,
            'conditions'=>array('Producto.id'=>$idProducto),
            'fields'=>array('Producto.nombre')
        ));
        $this->set(compact('datosObs', 'nombreProducto'));
    }
}

?>