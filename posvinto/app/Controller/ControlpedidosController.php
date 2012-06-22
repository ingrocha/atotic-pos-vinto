<?php 
class ControlpedidosController extends AppController{
    public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $uses = array('Pedido', 'Usuario');
    public $layout = 'admin';
    
    function index($idmesa=null, $fecha = null){
        if(!empty($this->data)):
        debug($this->data);exit;
            $idmesa = 2;
            $fecha = "2012-06-08";
            $fecha = $fecha." %";
            //$id_usu = $this->Session->read('usuario_id');
            $this->set('pedidos', $this->Pedido->find('all', array('conditions'=>array('Pedido.mesa'=>$idmesa, 'Pedido.fecha like'=>$fecha))));
        else:
           $this->set('mozos', $this->Usuario->find('list',array('conditions'=>array('Usuario.perfile_id'=>1), 'fields'=>array('Usuario.nombre'))));
           
        endif;
    }
}
?>