<?php

class ClientesController extends AppController
{ //declaramos la clase controller para se usada con los beneficios del papa controller

    public $helpers = array('Html', 'Form'); //definimos que ayudantes vamos a usar
    public $uses = array('Cliente'); //definimos las tablas que vamos a utilizar
    public $components = array('Session');
    public $layout = 'vivavinto';

    public function index()
    {
        $this->paginate = array(
            'limit' => 25,
            'order' => array(
                'Cliente.id' => 'desc'
            )
        );

        // similar to findAll(), but fetches paged results
        $clientes = $this->paginate('Cliente'); //buscamos el listado de todos los clientes
        $this->set(compact('clientes'));
        //debug($clientes);
    }

    public function nuevo()
    {
        //$cliente = $this->Cliente->fin
        //debug($this->data); //vemos los datos que nos ha llegado
        if (!empty($this->data))
        { //preguntamos si los datos NO son vacios
            $this->Cliente->create(); //habilito un registrro nuevo en la tabla

            if ($this->Cliente->save($this->data))
            { //pregunto si guardo bien los datos
                $this->Session->setFlash('Cliente registrado con exito'); //Mostramos un mensaje de texto al usuario
                $this->redirect(array('action' => 'index'), null, true); //redireccionamos a la pantalla principal
            } else
            { // de lo contrario
                $this->Session->setFlash('No se pudo registrar!'); //Mostramos mensaje al usuario
            }
        }
    }

    public function modificar($id = null)
    {
        $this->Cliente->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data))
        {
            $this->data = $this->Cliente->read();
        } else
        {
            if ($this->Cliente->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

    public function baja($id = null)
    {
        $this->request->data['Cliente']['id'] = $id;
        $this->request->data['Cliente']['estado'] = 0;

        if ($this->Cliente->save($this->data))
        {

            $this->Session->setFlash('El usuario  ' . $id . ' fue dado de baja');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>