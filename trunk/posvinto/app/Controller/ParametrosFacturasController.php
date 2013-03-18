<?php
class ParametrosfacturasController extends AppController
{
    public $same ='Parametrosfacturas';
    public $uses =array('Parametrosfactura');
   public $layout = 'pizza';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow();
    }
    public function index ()
    {
        $pfacturas=$this->Parametrosfactura->find('all');
        $this->set(compact('pfacturas'));
    }    
    public function insertar()
    {
        if(!empty($this->request->data))
            {
                $this->Parametrosfactura->create();
                    if($this->Parametrosfactura->save($this->data))
                        {
                            $this->Session->setFlash('El Parametro factura fue Registrado con Exito', 'msgbueno');
                            $this->redirect(array('action'=>'index'));
                        }
                    else
                    {
                        $this->Session->setFlash('No se pudo registrar el Parametr factura');
                    }
            }
    }
    public function editar($id=null)
    {
        $this->Parametrosfactura->id=$id;
            if(!$id)
            {
                $this->Session->setFlash('No existe el Parametro factura');
                $this->redirect(array('action'=>'index'));
            }
            if(empty($this->request->data))
            {
                $this->data=$this->Parametrosfactura->read();
            }
                else
                {
                    if($this->Parametrosfactura->save($this->data))
                    {
                        $this->Session->setFlash('Los datos fueron modificados', 'msgbueno');
                        $this->redirect(array('action'=>'index'));
                    }
                    else
                    {
                        $this->Session->setFlash('no se puedo modificar');    
                    }
                }
    }
    public function eliminar($id=null)
    {
        $this->Parametrosfactura->id=$id;
        $this->data=$this->Parametrosfactura->read();
        if(!$id){
            $this->Session->setFlash('No existe el Parametr factura a Eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else{
            if($this->Parametrosfactura->delete($id))
            {
                $this->Session->setFlash('Se elimino el Parametro factura '.$this->data['Parametrosfactura']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}
?>