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

    public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $uses = array('Usuario', 'Producto', 'Pedido', 'Categoria', 'Item', 'PedidosMesa', 'Porcione', 'Movimientosinsumo');
    public $layout = 'publico';

    public function index() {
        $this->Pedido->recursive = 0;
        $this->set('pedidos', $this->paginate());
    }

    public function pedidomoso($id_moso = null, $pedido = null, $mesa = null) {

        $categorias = $this->Categoria->find('all', array('recursive' => -1));
        //debug($categorias);   
        $productos = $this->Producto->find('all', array('recursive' => -1, 'order' => 'Producto.categoria_id ASC'));
        //debug($productos);
        $this->set(compact('productos', 'id_moso', 'pedido', 'categorias', 'mesa'));
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
        $usuarios = $this->Pedido->Usuario->find('list');
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
        $usuarios = $this->Pedido->Usuario->find('list');
        $this->set(compact('platos', 'usuarios'));
    }

    public function verdetalle($id_ped = nulll) {
        $items = $this->Item->find('all', array('conditions' => array('Item.pedido_id' => $id_ped)));
        $pedido = $this->Pedido->findById($id_ped);
        //$items = $this->Pedido->find('threaded');
        debug($pedido);
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

    public function restarproducto($id_item = null) {
        $item = $this->Item->findById($id_item);
        //debug($item);
        $cantidad_anterior = $item['Item']['cantidad'];
        $pedido = $item['Pedido']['id'];
        if ($cantidad_anterior == 1) {
            $this->Item->delete($id_item);
        } else {
            $this->Item->id = $id_item;
            $precio_producto = $item['Producto']['precio'];
            $cantidad_actual = --$cantidad_anterior;
            $precio = $cantidad_actual * $precio_producto;
            $this->request->data['Item']['cantidad'] = $cantidad_actual;
            $this->request->data['Item']['precio'] = $precio;
            $this->Item->save($this->data);
        }
        $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
        $cant_platos = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido), 'recursive' => -1, 'fields' => array('SUM(Item.cantidad) as cantidad')));
        //debug($items);
        $this->set(compact('items', 'pedido', 'cant_platos'));
    }

    public function registrarpedido($pedido = null, $total = null) {

        //$mesas = $this->Pedido->find('first', array('conditions'=>array(), 'order'=>'Pedido.id DESC'));
        $mesa = $this->Pedido->find('neighbors', array('field' => 'id', 'value' => $pedido, 'recursive' => -1));
        //debug($mesa);
        if (!empty($mesa)) {
            $ultima_mesa = $mesa['prev']['Pedido']['mesa'];
            $nueva_mesa = ++$ultima_mesa;
        } else {
            $nueva_mesa = 1;
        }
        //debug($ultima_mesa);
        $this->Pedido->id = $pedido;
        $this->request->data['Pedido']['mesa'] = $nueva_mesa;
        $this->request->data['Pedido']['total'] = $total;
        if ($this->Pedido->save($this->data)) {
            /*******************************movimiento de insumos******************************************************/
            $insumos = $this->Porcione->find('all', array('conditions'=>array('Porcione.producto_id'=>$id_prod), 'recursive'=>-1));
                //debug($insumos);
                foreach($insumos as $in){
                    $movin = $this->Movimientosinsumo->find('first', array('conditions'=>array('Movimientosinsumo.insumo_id'=>$in['Porcione']['insumo_id']), 'order'=>'Movimientosinsumo.id DESC'));
                    //debug($movin);
                    $ingreso = $movin['Movimientosinsumo']['ingreso'];
                    $this->Movimientosinsumo->create();
                    
            /*******************************fin movimiento de insumos******************************************************/
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

    public function asignacionmesa() {

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
    
    public function mismesas(){
        
        //debug($this->data);
        if(!empty($this->data)){
            
            $num = $this->data['Pedidos']['numero'];
            $verif = $this->Usuario->find('first', array('conditions' => array('Usuario.codigo' => $num), 'recursive' => -1));
            $id_moso = $verif['Usuario']['id'];
            //debug($verif);
            if($verif){
                $this->redirect(array('action'=>'listadomesas', $id_moso));    
            }
                        
        }else{
            $this->Session->setFlash("No existen datos");    
        }    
    }
    
    public function listadomesas($id_moso=Null){
        
        $mesas = $this->Pedido->find('all', array('conditions'=>array('Pedido.usuario_id'=>$id_moso)));
        //debug($mesas);
        $this->set(compact('mesas'));
    }
    
    public function ingreso(){
            
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

    public function verificamoso() {

        //debug($this->data);
        if (!empty($this->data)) {

            $num = $this->data['Pedidos']['numero'];
            $verif = $this->Usuario->find('first', array('conditions' => array('Usuario.codigo' => $num), 'recursive' => -1));

            if (!empty($verif)) {

                $fecha = date('Y-m-d H:i:s');
                $this->data = "";
                $id_moso = $verif['Usuario']['id'];
                $pedido = $this->Pedido->find('first', array('order' => 'Pedido.id DESC'));
                //if(empty($pedido)){
                //$mesa = 1;
                //}else{
                $m = $pedido['Pedido']['mesa'];
                $mesa = ++$m;
                //}  
                //debug($ul_pedido);exit;
                $this->request->data['Pedido']['usuario_id'] = $verif['Usuario']['id'];
                $this->request->data['Pedido']['fecha'] = $fecha;
                $this->request->data['Pedido']['mesa'] = $mesa;

                //$mesa = $this->Pedido->find('neighbors', array('field' => 'id', 'value' => $ul_pedido, 'recursive' => -1));              

                $this->Pedido->create();

                if ($this->Pedido->save($this->data)) {

                    $ul_pedido = $this->Pedido->getLastInsertID();
                    //insertamos la mesa creada
                    //$this->Pedido->id = $ul_pedido;
                    //$this->request->data['Pedido']['mesa'];
                    $this->redirect(array('action' => 'pedidomoso', $id_moso, $ul_pedido, $mesa));
                }
                //debug($this->data);exit;
            } else {
                $this->Session->setFlash('Codigo erroneo Vuelva a intentarlo');
            }
            //echo $num;
            //debug($verif);    
        } else {
            
        }
    }

    public function restaritem($id_ped = null) {
        
    }

    public function ajaxlistado($id_moso = null, $id_prod = null, $pedido = null, $mesa = null) {

        $this->layout = 'ajax';

        $fecha = date('Y-m-d H:i:s');
        $this->request->data['Item']['pedido_id'] = $pedido;
        $this->request->data['Item']['producto_id'] = $id_prod;
        //$this->request->data['Pedido']['usuario_id'] = $id_moso;
        $this->request->data['Item']['fecha'] = $fecha;

        $productos = $this->Producto->find('first', array(
            'conditions' => array(
                'Producto.id' => $id_prod
            ), 'recursive' => -1
                ));
        $precio_prod = $productos['Producto']['precio'];

        $plato_pedido = $this->Item->find('first', array(
            'conditions' => array(
                'Item.pedido_id' => $pedido,
                'Item.producto_id' => $id_prod
            ),
            'recursive' => -1
                ));

        if (!empty($plato_pedido)) {
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
            if ($this->Item->save($this->data)) {
                $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
                $cant_platos = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido), 'recursive' => -1, 'fields' => array('SUM(Item.cantidad) as cantidad')));
                //debug($cant_platos);
                $this->set(compact('items', 'pedido', 'mesa', 'cant_platos'));
            }
            //debug($cantidad_encontrada);
        } else {

            $this->request->data['Item']['precio'] = 1 * $precio_prod;
            $this->request->data['Item']['cantidad'] = 1;

            if ($this->Item->save($this->data)) {
                $items = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido)));
                $cant_platos = $this->Item->find('all', array('conditions' => array('pedido_id' => $pedido), 'recursive' => -1, 'fields' => array('SUM(Item.cantidad) as cantidad')));
                //debug($items);exit;
                $this->set(compact('items', 'pedido', 'mesa', 'cant_platos'));
            }
        }
    }

}
