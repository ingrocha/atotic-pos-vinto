<?php

// app/Controller/UsersController.php
class ClasesController extends AppController
{

    public $layout = 'vivavinto';
    public $uses = array('Clase');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index()
    {
        $clases = $this->Clase->find('all',array('recursive' => -1));
        $this->set(compact('clases'));
        //debug($clases);exit;
    }
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Clase->create(); 
            if ($this->Clase->save($this->data)) { 
                $this->Session->setFlash('Elemento Menu registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el elemento menu con exito'); 
            }
        }
    }

    function editar($id=null){
        $this->Clase->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe el Elemento del Menu');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Clase->read();

        } else {
            if ($this->Clase->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados Exitosamente...!!!');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }        
    }

    public function eliminar($id = null)
    {
        $this->User->delete($id);
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}