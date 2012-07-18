<?php
class UsuariosController extends AppController
{ 

    public $helpers = array('Html', 'Form'); 
    public $components = array('Session');
    public $uses = array('Usuario', 'Perfile','Departamento', 'Sucursal', 'Estado'); 
    public function beforefilter(){
        $this->checksession();
    }
    public function index()
    {

        $usuarios = $this->Usuario->find('all'); 
        $this->set(compact('usuarios'));
        
    }
    public function login(){
        //debug($this->params);exit;
        if(!empty($this->data)){
        $usuario = $this->data['Usuario']['username'];
        $password = sha1($this->data['Usuario']['password']);
        $nombre_usuario = $this->Usuario->find('first', array('conditions' => array('Usuario.usuario' =>
            $usuario)));
        

        if (empty($nombre_usuario)):
            $this->Session->setFlash('El nombre de usuario no existe intente de nuevo por favor.');
            $this->redirect('/');
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
                if($tipo_usuarioid == 1):
                  $this->redirect('/Panelcontrol/');
                else:
                   $this->redirect('/Pedidos/listadopedidos/');
                endif;
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
    public function nuevo()
    {
        
        if (!empty($this->data)) { 

            $this->Usuario->create(); 
            $pass = sha1($this->data['Usuario']['pass']);
            $this->request->data['Usuario']['pass']= $pass;
            if ($this->Usuario->save($this->data)) { 

                $this->Session->setFlash('Usuario registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 

            } else { 

                $this->Session->setFlash('No se pudo registrar el Usuario'); 
            }
            
        }
         $dperf = $this->Perfile->find('list', array('fields'=>'Perfile.nombre'));
        $sucursales = $this->Sucursal->find('list', array('fields'=>array('Sucursal.id', 'Sucursal.nombre')));
        $estados = $this->Estado->find('list', array('fields'=>array('Estado.nombre')));
       $this->set(compact('dperf', 'sucursales', 'estados'));
  
        
    }

    public function modificar($id = null)
    {
        $this->Usuario->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Usuario->read();

        } else {
            $pass = sha1($this->data['Usuario']['pass']);
            $this->request->data['Usuario']['pass']= $pass;
            if ($this->Usuario->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dperf = $this->Perfile->find('list', array('fields'=>'Perfile.nombre'));
       // debug($dperf);
        $sucursales = $this->Sucursal->find('list', array('fields'=>array('Sucursal.id', 'Sucursal.nombre')));
        $estados = $this->Estado->find('list', array('fields'=>array('Estado.nombre')));
       $this->set(compact('dperf', 'sucursales', 'estados'));
        
    }

    public function baja($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        $baja = $this->Estado->find('first', array('conditions'=>array('Estado.nombre LIKE'=>"baja")));
        $this->Usuario->id = $id;
        $this->request->data['Usuario']['estado_id'] = $baja['Estado']['id'];
        if ($this->Usuario->save($this->data)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue dado de baja');
            $this->redirect(array('action' => 'index'));
        }
    }
    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        
        if ($this->Usuario->delete($id)) {
            $this->Session->setFlash('El usuario  ' . $id . ' fue eliminado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>