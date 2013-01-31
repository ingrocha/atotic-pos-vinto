<?php 
class ConfiguracionesController extends AppController{
    public $helpers = array('Form', 'Html');
    public $components = array(
        'Session'
        );
    public $uses = array(
        'Descuento','Cliente');
    public $layout = 'vivavinto';
    
    public function index(){
   $descuentos = $this->Descuento->find('all');
        $this->set(compact('descuentos'));
    //debug($configuraciones);exit;
        
    }
    function descuentos(){
        $descuentos = $this->Descuento->find('all');
        $this->set(compact('descuentos'));
      //  debug($descuentos);exit;
    } 
    function nuevodescuento(){
        if(!empty($this->data)){
            $this->Descuento->create();
            $descuento = $this->data['Descuento']['porcentaje']/100;
            $this->request->data['Descuento']['porcentaje'] = $descuento;
            if ($this->Descuento->save($this->data)) {
                $this->Session->setFlash('Descuento '.$this->Descuento->id.' creado');
                $this->redirect(array('action' => 'descuentos'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }
    function editadescuento($id=null){
        $this->Descuento->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Descuento->read();

        } else {
            $descuento = $this->data['Descuento']['porcentaje']/100;
            $this->request->data['Descuento']['porcentaje'] = $descuento;
            if ($this->Descuento->save($this->data)) {
                $this->Session->setFlash('Descuento modificado');
                $this->redirect(array('action' => 'descuentos'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }
    
    function eliminardescuento($id=null){
        if($this->Descuento->delete($id)){
            $this->Session->setFlash('Descuento '.$id.' eliminado');
                $this->redirect(array('action' => 'descuentos'), null, true);
            } else {
                $this->Session->setFlash('no se pudo eliminar!!');
            }
    }
}
 ?>