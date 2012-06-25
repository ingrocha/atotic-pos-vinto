<?php
class AdminController extends AppController {
   public $helpers = array(
        'Form',
        'Html'
    );
    public $components = array('Session');
    public $layout = 'admin';
    
    public function index(){
        
    }
}
?>