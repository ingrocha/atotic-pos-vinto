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
    public function insertar()
    {
        
    }
} 
?>