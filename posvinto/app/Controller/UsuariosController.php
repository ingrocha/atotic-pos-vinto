<?php
class UsuariosController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $uses = array(
        'Usuario',
        'Perfile',
        'Departamento',
        'Sucursal',
        'Estado');
    public $layout = 'vivavinto';

    public function beforefilter()
    {
        //$this->checksession();
    }
    
    public function index()
    {
        //$this->paginate = array('limit' => 6, 'order' => array('Usuario.id' => 'desc'));

        // similar to findAll(), but fetches paged results
        //$usuarios = $this->paginate('Usuario');
        $usuarios = $this->Usuario->find('all');
        $this->set(compact('usuarios'));
    }

    public function nuevo()
    {

        if (!empty($this->data)) {

            $this->Usuario->create();
            $pass = sha1($this->data['Usuario']['pass']);
            $this->request->data['Usuario']['pass'] = $pass;
            if ($this->Usuario->save($this->data)) {

                $this->Session->setFlash('Usuario registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);

            } else {

                $this->Session->setFlash('No se pudo registrar el Usuario');
            }

        }
        $perfiles = $this->Perfile->find('all', array('fields' => array('Perfile.id', 'Perfile.nombre')));
        //debug($perfiles);exit;
        $sucursales = $this->Sucursal->find('list', array('fields' => array('Sucursal.id',
                    'Sucursal.nombre')));
        $estados = $this->Estado->find('all', array('fields' => array('Estado.id', 'Estado.nombre')));
        $this->set(compact('sucursales', 'estados', 'perfiles'));
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
            if ($this->Usuario->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $perfiles= $this->Perfile->find('list', array('fields' => array('Perfile.id', 'Perfile.nombre')));
        //$perfiles = $this->Perfile->find('all', array('fields' => array('Perfile.id', 'Perfile.nombre')));
        //debug($perfiles);exit;
        $sucursales = $this->Sucursal->find('list', array('fields' => array('Sucursal.id',
                    'Sucursal.nombre')));
        $estados = $this->Estado->find('list', array('fields' => array('Estado.id', 'Estado.nombre')));
        $this->set(compact('sucursales', 'estados', 'perfiles'));

    }

    public function baja($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        $baja = $this->Estado->find('first', array('conditions' => array('Estado.nombre LIKE' =>
                    "baja")));
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
    public function cambiarpassword($id=null){
        if(!empty($this->data)){
            
            $contrasena = sha1($this->data['Usuario']['pass']);
            $this->data = '';
            $this->request->data['Usuario']['id']= $id;
            $this->request->data['Usuario']['pass'] = $contrasena;
            $this->Usuario->read();
            if($this->Usuario->save($this->data)){
                $this->Session->setFlash("Contrasena modificada");
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash("No se pudo modificar la contrasena");
                $this->redirect(array('action'=>'index')); 
            }
        }
    }
    function logout(){
      $this->Session->delete('nombre');
      $this->Session->delete('usuario_id');      
      $this->Session->delete('tipousuario_id');      
      $this->redirect('/admin');
    }
}
?>