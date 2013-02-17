<?php
class AdminController extends AppController {
   public $helpers = array('Form','Html');
    public $components = array('Session');
    public $uses = array('Usuario');
    public $layout = 'vivavinto';

    public function index(){
        //debug($this->params);exit;
         
    }
    public function login(){
        //debug($this->params);exit;
        if(!empty($this->data)){
            
        $usuario = $this->data['Usuarios']['usuario'];
        $password = sha1($this->data['Usuarios']['contrasena']);
        $nombre_usuario = $this->Usuario->find('first', array('conditions' => array('Usuario.usuario' =>
            $usuario)));
        if (empty($nombre_usuario)):
            $this->Session->setFlash('El nombre de usuario no existe intente de nuevo por favor.');
            $this->redirect(array('action'=>'index'), null, true);
        else:
        if ($password == $nombre_usuario['Usuario']['pass']):
          // debug($nombre_usuario);exit;
                $id = $nombre_usuario['Usuario']['id'];
                $nombre = $nombre_usuario['Usuario']['nombre'];
                
                $nom_user = $nombre_usuario['Usuario']['usuario'];

                $tipo_usuario = $nombre_usuario['Perfile']['nombre'];
                $tipo_usuarioid = $nombre_usuario['Perfile']['id'];
                $sucursal = $nombre_usuario['Sucursal']['id'];
                $this->Session->write("usuario_id", $id);
                $this->Session->write("nombre", $nombre);
                $this->Session->write("user", $nom_user);
                $this->Session->write("tipousuario", $tipo_usuario);
                $this->Session->write("tipo_id", $tipo_usuarioid);
                $this->Session->write("sucursal_id", $sucursal);
                
                $this->Session->setFlash('Ingreso con exito');
                if($tipo_usuarioid == 1){
                  $this->redirect(array('controller'=>'Panelcontrol', 'action'=>'admin'));
                }elseif($tipo_usuarioid == 3){
                   $this->redirect(array('controller'=>'Cobrador', 'action'=>'index'));
                }else{
                   $this->redirect('/Pedidos/listadopedidos/'); 
                }
            else:
                $this->Session->setFlash('La contrase&ntilde;a no coincide, por favor intente de nuevo.');
                $this->redirect('/');
            endif;
        endif;    
        }
        

}
    public function logout() {
        $this->redirect($this->Auth->logout());
        $this->Session->destroy();
        $this->redirect('/');
    }
}
?>