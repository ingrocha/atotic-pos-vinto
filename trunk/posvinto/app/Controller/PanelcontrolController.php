<?php
class PanelcontrolController  extends AppController {
   public $helpers = array(
        'Form',
        'Html'      
    );
    public $components = array('Session');
    public $layout = 'vivavinto'; 
    public $uses = array('Pedido');
    
    function beforeFilter(){
       $this->checksession();
    }
    public function index(){
        
    }
    
    public function admin()
    {
        App::uses('CakeTime', 'Utility');
        $fecha = date("Y-m-d");
        //$fechaTodoElDia = CakeTime::dayAsSql($fecha, null);
        
        $pedidosHoy = $this->Pedido->find('all', array(
            'recursive'=>-1,
            'conditions'=>(CakeTime::dayAsSql($fecha, 'Pedido.fecha'))
        ));
        $this->set(compact('pedidosHoy'));
        //debug()
    }
}
?>