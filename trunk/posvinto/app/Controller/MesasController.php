<?php
class MesasController extends AppController
{
    public $helpers = array('Html', 'Form');
    public $uses = array('Mesa','Ambiente');
    public $components = array('Session');
    public $layout = 'vivavinto';
    
    public function index($idAmbiente = null)
    {
        if(!empty($this->request->data['Mesa']['ambiente']))
        {
            $idAmbiente = $this->request->data['Mesa']['ambiente'];
        }
        $ambiente = $this->Ambiente->find('first',array('conditions' => array('Ambiente.id' => $idAmbiente)));
        $mesas = $this->Mesa->find('all',array('recursive' => -1,'conditions' => array('Mesa.ambiente_id' => $idAmbiente)));
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
            $this->redirect(array('action' => 'index',$idAmbiente));
        }
        $this->set(compact('mesas','ambiente'));
    }
    public function add($idAmbiente = null)
    {
        $ultimamesa = $this->Mesa->find('first',array('order' => 'Mesa.id DESC','conditions' => array('Mesa.ambiente_id' => $idAmbiente)));
        if(!empty($ultimamesa))
        {
            $this->Mesa->create();
            $this->request->data['Mesa']['numero'] = $ultimamesa['Mesa']['numero'] +1;
            $this->request->data['Mesa']['posix'] = 80;
            $this->request->data['Mesa']['posiy'] = 160;
            $this->request->data['Mesa']['ambiente_id'] = $idAmbiente;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        else{
            $this->Mesa->create();
            $this->request->data['Mesa']['numero'] = 1;
            $this->request->data['Mesa']['posix'] = 80;
            $this->request->data['Mesa']['posiy'] = 160;
            $this->request->data['Mesa']['ambiente_id'] = $idAmbiente;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        $this->redirect(array('action' => 'index',$idAmbiente));
    }
    public function addambiente()
    {
        $ultimo = $this->Ambiente->find('first',array('order' => 'Ambiente.id DESC'));
        $this->Ambiente->create();
        $this->request->data['Ambiente']['numero'] = $ultimo['Ambiente']['numero'] + 1;
        $this->Ambiente->save($this->request->data['Ambiente']);
        $idAmbiente = $this->Ambiente->getLastInsertID();
        $this->redirect(array('action' => 'index',$idAmbiente));
    }
    public function eliminar($idMesa = null,$idAmbiente = null) 
    {
        $this->Mesa->delete($idMesa);
        $mesas = $this->Mesa->find('all',array('conditions' => array('Mesa.ambiente_id' => $idAmbiente)));
        $i = 0;
        foreach($mesas as $me)
        {
            $i++;
            $this->Mesa->id = $me['Mesa']['id'];
            $this->request->data['Mesa']['numero'] = $i;
            //$this->request->data['Mesa']['posiy'] = $me['Mesa']['posiy'] + 100;
            $this->Mesa->save($this->request->data['Mesa']);
        }
        
        $this->redirect(array('action' => 'index',$idAmbiente));
    }
    public function ocupar($idMesa = null,$idAmbiente = null)
    {
        $this->Mesa->id = $idMesa;
        $this->request->data['Mesa']['pedido_id'] = 9999;
        $this->Mesa->save($this->request->data['Mesa']);
        $this->redirect(array('action' => 'index',$idAmbiente));
    }
    public function desocupar($idMesa = null,$idAmbiente = null)
    {
        $this->Mesa->id = $idMesa;
        $this->request->data['Mesa']['pedido_id'] = null;
        $this->Mesa->save($this->request->data['Mesa']);
        $this->redirect(array('action' => 'index',$idAmbiente));
    }
    public function deleteambiente($idAmbiente = null)
    {
        $mesas = $this->Mesa->find('all' ,array('conditions' => array('Mesa.ambiente_id' => $idAmbiente)));
        foreach($mesas as $m)
        {
            $this->Mesa->delete($m['Mesa']['id']);
        }
        $this->Ambiente->delete($idAmbiente);
        $ambientes = $this->Ambiente->find('all');
        $i = 0;
        foreach($ambientes as $am)
        {
            $i = $i+1;
            $this->Ambiente->id = $am['Ambiente']['id'];
            $this->request->data['Ambiente']['numero'] = $i;
            $this->Ambiente->save($this->request->data['Ambiente']);
        }
        $this->redirect(array('action' => 'ambientes'));
        
    }
    public function ambientes()
    {
        $ambientes = $this->Ambiente->find('all');
        $this->set(compact('ambientes'));
    }
    
} 
?>