<?php
class PanelcontrolController  extends AppController {
   public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $layout = 'admin';
    
    function beforeFilter(){
       $this->checksession();
    }
    public function index(){
        
    }
}
?>