<?php

App::uses('AppController', 'Controller');

/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property SessionComponent $Session
 * @property AclComponent $Acl
 */
 
class CrearfacturasController extends AppController {
    public $helpers = array(
        'Form',
        'Html'
    );
    
    public $components = array('Session');
    
    public $uses = array();
    public $layout = 'admin';

    public function index() {
        debug($this->Pedido->recursive = 0);
        exit;
        //$this->set('pedidos', $this->paginate());
    }
}
?>