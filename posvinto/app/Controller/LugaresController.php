<?php
class LugaresController extends AppController
{
    public $uses = array('Lugare');
    public $layout = 'vivavinto';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('*');
    }
    
    public function index()
    {
        $lugares = $this->Lugare->find('all');
        $this->set(compact('lugares'));
       // debug($lugares);
    }
    
    public function insertar()
    {
        if(!empty ($this->data))
        {
            $this->Lugare->create();
                $this->request->data['Lugare']['estado']=1;
                if($this->Lugare->save($this->data))
                {
                    $this->Session->setFlash('Lugar Registrado con Exito...!!!');
                    $this->redirect(array('action'=>'index'));
                }
                else {
                    $this->Session->setFlash('No se puedo registrar el Lugar');
                }
        }
    }
    function editar($id = null)
    {
        $this->Lugare->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Lugar');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Lugare->read();
            }
        else{
            if ($this->Lugare->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Lugar');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar el Lugar');
            }
        }

    }
    function eliminar($id=null){
        $this->Lugare->id=$id;
        $this->data=$this->Lugare->read();
        if(!$id){
            $this->Session->setFlash('No existe el Lugar a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Lugare->delete($id)){
                $this->Session->setFlash('Se elimino el Lugar '.$this->data['Lugare']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
