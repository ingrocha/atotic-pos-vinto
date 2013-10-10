<?php
class MesasController extends AppController
{
    public $helpers = array('Html', 'Form');
    public $uses = array('Mesa');
    public $components = array('Session');
    public $layout = 'vivavinto';
    
    public function index()
    {
        $mesas = $this->Mesa->find('all');
        if(!empty($this->request->data))
        {
            $i = 0;
            foreach($mesas as $obj)
            {
                $i++;
                $this->Mesa->id = $obj['Mesa']['id'];
                $this->request->data['Mesa']['posix'] = $this->request->data['Mesa'][$i]['posix'];
                $this->request->data['Mesa']['posiy'] = $this->request->data['Mesa'][$i]['posiy'];
                $this->Mesa->save($this->request->data);
            }
            $this->redirect(array('action' => 'index'));
        }
        $this->set(compact('mesas'));
    }
    public function add()
    {
        $ultimamesa = $this->Mesa->find('first',array('order' => 'Mesa.id DESC'));
        if(!empty($ultimamesa))
        {
            $this->Mesa->create();
            $this->request->data['Mesa']['numero'] = $ultimamesa['Mesa']['numero'] +1;
            $this->request->data['Mesa']['posix'] = 0;
            $this->request->data['Mesa']['posiy'] = 135;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        else{
            $this->Mesa->create();
            $this->request->data['Mesa']['numero'] = 1;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        $this->redirect(array('action' => 'index'));
    }
    public function eliminar($idMesa = null)
    {
        $this->Mesa->delete($idMesa);
        $mesas = $this->Mesa->find('all');
        $i = 0;
        foreach($mesas as $me)
        {
            $i++;
            $this->Mesa->id = $me['Mesa']['id'];
            $this->request->data['Mesa']['numero'] = $i;
            //$this->request->data['Mesa']['posiy'] = $me['Mesa']['posiy'] + 100;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        
        $this->redirect(array('action' => 'index'));
    }
    
} 
?>