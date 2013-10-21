<?php

// app/Controller/UsersController.php
class UsersController extends AppController
{

    public $layout = 'vivavinto';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function index()
    {
        //$this->User->recursive = 0;
        $users = $this->User->find('all',array('recursive' => -1,'order' => 'User.id DESC'));
        $this->set(compact('users'));
        //$this->set('users', $this->paginate());
    }

    public function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add()
    {
        if ($this->request->is('post'))
        {
            //debug($this->request->data);exit;
            $this->User->create();
            if ($this->User->save($this->request->data))
            {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $roles = array('Administrador' => 'Administrador', 'Almacenes' => 'Almacenes', 'Cajero' => 'Cajero', 'Moso' => 'Moso', 'Jefe' => 'Jefe de mosos');
        $this->set(compact('roles'));
    }

    public function edit($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put'))
        {
            if ($this->User->save($this->request->data))
            {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else
        {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
        $roles = array('Administrador' => 'Administrador', 'Almacenes' => 'Almacenes', 'Cajero' => 'Cajero', 'Moso' => 'Moso', 'Jefe' => 'Jefe de mosos');
        $this->set(compact('roles'));
    }

    public function delete($id = null)
    {
        if (!$this->request->is('post'))
        {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists())
        {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete())
        {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function cambiopass($id = null)
    {
        $this->User->id = $id;
        if ($this->request->is('post') || $this->request->is('put'))
        {
            //debug($this->request->data);exit;            
            if ($this->User->save($this->request->data))
            {
                $this->Session->setFlash(__('Se cambio el password'), 'alerts/bueno');
                $this->redirect(array('action' => 'index'));
            } else
            {
                $this->Session->setFlash(__('No se pudo guardar. Por favor intente de nuevo', 'alerts/bueno'));
            }
        } else
        {
            $this->request->data = $this->User->read(null, $id);
        }
    }

    public function login()
    {
        $this->layout = 'login';
        if ($this->request->is('post'))
        {
            if ($this->Auth->login())
            {
                //$this->redirect($this->Auth->redirect(array('controller' => 'Panelcontrol', 'action' => 'admin'));
                $perfil = $this->Session->read("Auth.User.role");
                if ($perfil == "Almacenes")
                {
                    $this->redirect(array('controller' => 'Insumos', 'action' => 'bodega'));
                } else
                {
                    $this->redirect(array('controller' => 'Panelcontrol', 'action' => 'admin'));
                }
            } else
            {
                $this->Session->setFlash(__('Invalid username or password, try again'));
            }
        }
    }

    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }

}