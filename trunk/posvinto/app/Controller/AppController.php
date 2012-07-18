<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    /*public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );*/        
    
    public $helpers = array('Html', 'Form', 'Session');

    /*public function beforeFilter() {
        
        $this->Auth->userModel = 'Usuario';
        $this->Auth->authorize = 'actions';
        //Configure AuthComponent
        $this->Auth->loginAction = array('controller' => 'Usuarios', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'Usuarios', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'Pedidos', 'action' => 'pedidomoso');
        
        //permitomos la entradfa a todo elsistema
        //$this->Auth->allowedActions = array('*');
        $this->Auth->allowedActions = array('controller' => 'Usuarios', 'action' => 'logout');
        $this->Auth->allowedActions = array('controller' => 'Pedidos', 'action' => 'verificamoso');
        $this->Auth->allowedActions = array('controller' => 'Pedidos', 'action' => 'pedidomoso');
        $this->Auth->allowedActions = array('controller' => 'Pedidos', 'action' => 'listadopedidos');        
        
        /*if($this->action!= 'login' && $this->action!= 'logout')
		{
			$permisoActual= $this->Acl->check($this->Auth->user(), $this->name.'/'.$this->action);
			if ($permisoActual!=true)
				$this->redirect($this->Auth->logout());
		}*/
    //}
    function checksession(){

      if($this->Session->read('usuario_id')):
      else:
         $this->Session->SetFlash('Su Sesion ha terminado por favor vuelva a ingresar al sitio');
         $this->redirect(array('controller'=>'admin', 'action' => 'index'), null, true); 
      endif;         
        
   }
}
?>