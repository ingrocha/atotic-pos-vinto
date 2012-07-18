<?php
class AdminController extends AppController {
   public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $layout = 'admin';
    
    function beforeFilter(){
       $this->redirect('/usuarios/login/');
    }
    public function index(){
        
    }
}
?>