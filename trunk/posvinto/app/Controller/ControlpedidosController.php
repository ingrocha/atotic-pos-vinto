
<?php 
class ControlpedidosController extends AppController{
    public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $uses = array('Pedido', 'Usuario', 'Item');
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
        //$pedido=$this->Pedido->findById($idpedido);
        //debug($pedido);
        //recorre y muestra el array interno del hasmany
        /*$i=0;
        foreach($pedido as $ped){
            $i++;
            if($i == 3){
               debug($ped);
               foreach($ped as $p)
                  debug($p);    
            }
             
        }*/
       $this->set('pedido',$this->Item->find('all', array( 'conditions'=>array('Item.pedido_id'=>$idpedido))));
    }
    public function facturar2(){
        debug($this->data);exit;
    }
    public function formbuscar(){
        if(!empty($this->data)){
            //debug($this->data);
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

