<?php

class PedidosMesaController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $uses = array('PedidosMesa');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('*');
    }

    public function index()
    {

        $pedidos_mesa = $this->PedidosMesa->find('all');
        $this->set(compact('pedidos_mesa'));
    }

    public function nuevo()
    {

        if (!empty($this->data))
        {

            $this->PedidosMesa->create();

            if ($this->PedidosMesa->save($this->data))
            {

                $this->Session->setFlash('pedido mesa registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);
            } else
            {

                $this->Session->setFlash('No se pudo registrar el Pedido de la Mesa');
            }
        }
    }

    public function modificar($id = null)
    {
        $this->PedidosMesa->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data))
        {
            $this->data = $this->PedidosMesa->read();
        } else
        {
            if ($this->PedidosMesa->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

    public function eliminar($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->PedidosMesa->delete($id))
        {

            $this->Session->setFlash('El Pedido de la Mesa  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>