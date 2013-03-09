<?php

class InsumosController extends AppController
{

    public $helpers = array(
        'Html',
        'Form',
        'Javascript',
        'Ajax');
    public $uses = array(
        'Insumo',
        'Almacen',
        'Bodega',
        'Tipo');
    public $components = array('Session');
    public $layout = 'vivavinto';

    public function index()
    {
        /*$idsinsumos = $this->Almacen->find('all', array(
        'fields' => array('max(Almacen.id)as id'),
        'group' => array('Almacen.insumo_id'),
        'order' => array('Almacen.insumo_id ASC')));
        $i = 0;

        foreach ($idsinsumos as $id)
        {
        foreach ($id as $di)
        $ids[$i] = $di['id'];
        $i++;
        }*/

        /*$dinsumos = $this->Almacen->find('all', array('recursive' => 2, 'conditions' =>
        array('Almacen.id' => $ids)));*/
        $insumos = $this->Insumo->find('all', array('recursive' => 0));
        $this->set(compact('insumos'));
        //debug($insumos);exit;
    }

    public function nuevacategoria()
    {

        if (!empty($this->data))
        {
            //debug($this->data);
            if ($this->Tipo->save($this->data))
            {
                $this->Session->setFlash('Ingreso registrado con exito!');
                $this->redirect(array('action' => 'categoriasalmacen'));
            }
            else
            {
                $this->Session->setFlash('Error al guardar');
                $this->redirect(array('action' => 'categoriasalmacen'));
            }
        }
        else
        {

        }
    }

    public function editarcategoria($id = null)
    {

        $this->Tipo->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'categoriasalmacen'), null, true);
        }

        if (empty($this->data))
        {
            $this->data = $this->Tipo->read();
        }
        else
        {

            if ($this->Tipo->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'categoriasalmacen'), null, true);
            }
            else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

    public function descat($id = null)
    {

        $this->Tipo->id = $id;
        $this->request->data['Tipo']['estado'] = 0;
        if ($this->Tipo->save($this->data))
        {
            $this->Session->setFlash('Se Elimino la Categoria');
            $this->redirect(array('action' => 'categoriasalmacen'));
        }
    }

    public function variasalidas()
    {
        $idsinsumos = $this->Almacen->find('all', array(
            'fields' => array('max(Almacen.id)as id'),
            'group' => array('Almacen.insumo_id'),
            'order' => array('Almacen.insumo_id ASC')));
        $i = 0;

        foreach ($idsinsumos as $id)
        {
            foreach ($id as $di)
                $ids[$i] = $di['id'];
            $i++;
        }

        $insumos = $this->Almacen->find('all', array('recursive' => 2, 'conditions' => array('Almacen.id' => $ids)));
        $this->set(compact('insumos'));

        $insumos = $this->Insumo->find('all', array('recursive' => -1));
        $this->set(compact('insumos'));
    }

    public function salidas()
    {

        if (!empty($this->data))
        {
            $datos = array();
            //debug($this->data);
            $i = 0;
            foreach ($this->data as $d)
            {
                //debug($d);
                //print_r($d);
                for ($c = 0; $c < count($d); $c++)
                {

                    //echo "el insumo for".$d[$c]['cantidad']."<br />";
                    //guardamos
                    $cant_salida = $d[$c]['cantidad'];
                    $id_insumo = $d[$c]['insumo_id'];

                    //$pc = $this->data['Movimiento']['pc'];
                    $pc = 0;
                    $existe_insumo = $this->Almacen->find('first', array(
                        'conditions' => array('insumo_id' => $id_insumo),
                        'order' => 'id DESC',
                        'recursive' => -1));
                    //debug($existe_insumo);exit;
                    if ($existe_insumo)
                    {

                        $total_anterior = $existe_insumo['Almacen']['total'];
                        $cant_actual = $total_anterior - $cant_salida;

                        $this->data = "";
                        $this->Insumo->id = $id_insumo;
                        $this->request->data['Insumo']['total'] = $cant_actual;

                        if (!$this->Insumo->save($this->data))
                        {
                            echo "no guardo";
                            //$this->_guardabodega();
                        }

                        $this->data = "";
                        $fecha = date("Y-m-d");
                        $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                        $this->request->data['Almacen']['preciocompra'] = $pc;
                        $this->request->data['Almacen']['salida'] = $cant_salida;
                        $this->request->data['Almacen']['total'] = $cant_actual;
                        $this->request->data['Almacen']['fecha'] = $fecha;
                        //debug($this->data);exit;
                        $this->Almacen->create();
                        if ($this->Almacen->save($this->data))
                        {
                            //$this->Session->setFlash('Ingreso registrado con exito!');
                            //$this->redirect(array('action' => 'index'));
                        }
                    }
                    else
                    {

                        //$this->data="";
                        $this->Insumo->id = $id_insumo;
                        $this->request->data['Insumo']['total'] = $cant_salida;
                        if (!$this->Insumo->save($this->data))
                        {
                            echo "no guardo";
                        }
                        $this->data = "";
                        $fecha = date("Y-m-d");
                        $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                        $this->request->data['Almacen']['preciocompra'] = $pc;
                        $this->request->data['Almacen']['ingreso'] = $cant_entrada;
                        $this->request->data['Almacen']['total'] = $cant_entrada;
                        $this->request->data['Almacen']['fecha'] = $fecha;
                        //debug($this->data);exit;
                        $this->Almacen->create();
                        if ($this->Almacen->save($this->data))
                        {
                            //$this->Session->setFlash('Ingreso registrado con exito!');
                            //$this->redirect(array('action' => 'index'));
                        }
                    }
                    //debug($this->data);
                    //fin guardamos
                }
                $this->redirect(array('action' => 'index'));
                //echo "el insumo ".$d['0']['cantidad'];
                //echo $i."<br />";
                //$i++;
            }
        }
        else
        {
            $dci = $this->Insumo->find('list', array('fields' => array('nombre')));
            //debug($dci);
            $this->set(compact('dci'));
        }
    }

    public function bodega()
    {
        $bodega = $this->Bodega->find('all', array(
            'fields' => array('max(Bodega.id) as id'),
            'recursive' => 1,
            'group' => array('Bodega.insumo_id'),
            'order' => array('Bodega.id ASC')));

        $ids = array();
        $i = 0;
        foreach ($bodega as $insumo)
        {
            foreach ($insumo as $id)
            {
                $ids[$i] = $id['id'];
            }
            $i++;
        }

        $bodega = $this->Bodega->find('all', array(
            'conditions' => array('Bodega.id' => $ids),
            'recursive' => 1,
            'group' => array('Bodega.insumo_id'),
            'order' => array('Bodega.id ASC')));
        $this->set(compact('bodega'));
    }

    function buscarbodega()
    {

        $this->layout = 'ajax';
        $dato = $this->data['Insumo']['nombre'];
        $tipo = $this->Tipo->find('all', array('conditions' => array('Tipo.nombre like' => "%$dato%"), 'recursive' => -1));
        //debug($tipo);exit;
        $i = 0;
        foreach ($tipo as $t)
        {
            $tipos[$i] = $t['Tipo']['id'];
            $i++;
        }
        //debug($tipos);exit;
        if (empty($tipos))
        {
            $bodega = $this->Bodega->find('all', array(
                'recursive' => 0,
                'conditions' => array('Insumo.nombre like' => "%$dato%"),
                'order' => array('Bodega.id DESC')));
        }
        else
        {
            $bodega = $this->Bodega->find('all', array(
                'recursive' => 0,
                'conditions' => array('or' => array('Insumo.nombre like' => "%$dato%", 'Insumo.tipo_id' => $tipos)),
                'order' => array('Bodega.id DESC')));
        }

        //debug($insumos);exit;
        $this->set(compact('bodega'));
    }

    function _guardabodega()
    {

        echo 'esta es la funcion';
    }

    public function salidalmacen($id = null)
    {
        $this->layout = 'ajax';

        if (!empty($this->data))
        {

            $cant_salida = $this->data['Movimiento']['salida'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];

            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo)
            {

                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior - $cant_salida;

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;

                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }

                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['salida'] = $cant_salida;
                $this->request->data['Almacen']['total'] = $cant_actual;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    //$this->redirect(array('action' => 'index'));
                }

                $existe_insumo_bodega = $this->Bodega->find('first', array(
                    'conditions' => array('insumo_id' => $id_insumo),
                    'order' => 'id DESC',
                    'recursive' => -1));

                if ($existe_insumo_bodega)
                {

                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;

                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo), 'recursive' => -1));
                    $this->data = "";
                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    //$this->Insumo
                    //$this->Insumo->id=$id_mod_insumo;

                    if ($this->Insumo->save($this->data))
                    {

                    }

                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_bodega_actual;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();

                    if ($this->Bodega->save($this->data))
                    {
                        $this->redirect(array('action' => 'index'));
                    }
                    else
                    {
                        echo "no guardo";
                    }
                }
                else
                {                    
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    //$id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    if(empty($cantidad_bodega) && empty($id_bodega))
                    {
                        $cantidad_bodega=0;                        
                    }                    
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;

                    $mod_bodega = $this->Insumo->find('first', array('conditions' => array('id' => $id_insumo), 'recursive' => -1));
                    $this->data = "";

                    $this->request->data['Insumo']['bodega'] = $cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    $this->Insumo->id = $id_mod_insumo;

                    if ($this->Insumo->save($this->data))
                    {

                    }

                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_salida;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();

                    if ($this->Bodega->save($this->data))
                    {
                        $this->redirect(array('action' => 'index'));
                    }
                    else
                    {
                        echo "no guardo";
                    }
                }
            }
            else
            {

                //$this->data="";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_salida;
                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }
                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['ingreso'] = $cant_entrada;
                $this->request->data['Almacen']['total'] = $cant_entrada;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            }
            //debug($this->data);
        }
        else
        {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id), 'recursive' => -1));
            $ce = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($insumo);
            $this->set(compact('insumo', 'ce'));
        }
    }

    public function ingresoalmacen($id = null)
    {

        $this->layout = 'ajax';
        if (!empty($this->data))
        {

            $cant_entrada = $this->data['Movimiento']['entrada'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo)
            {

                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior + $cant_entrada;

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;
                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }

                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['ingreso'] = $cant_entrada;
                $this->request->data['Almacen']['total'] = $cant_actual;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            }
            else
            {

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_entrada;
                if (!$this->Insumo->save($this->data))
                {
                    echo "no guardo";
                }

                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['ingreso'] = $cant_entrada;
                $this->request->data['Almacen']['total'] = $cant_entrada;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            }
            //debug($this->data);
        }
        else
        {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id), 'recursive' => -1));
            //debug($insumo);
            $this->set(compact('insumo'));
        }
    }

    public function buscar()
    {

        $this->layout = 'ajax';
        $nombre = $this->data['Insumo']['nombre'];
        $insumos = $this->Insumo->find('all', array('recursive' => 0, 'conditions' => array('Insumo.nombre like' => "%$nombre%")));
        //debug($insumos);
        $this->set(compact('insumos'));
        //debug($this->data);
    }

    public function nuevo()
    {

        $fecha = date("Y-m-d");
        if (!empty($this->data))
        {

            //debug($this->data);exit;
            $cantidad = $this->data['Insumo']['total'];
            $pc = $this->data['Insumo']['preciocompra'];
            $this->request->data['Insumo']['fecha'] = $fecha;
            $this->Insumo->create();
            if ($this->Insumo->save($this->data))
            {

                //$this->Session->setFlash('Insumo registrado con exito');
                $id_insumo = $this->Insumo->getLastInsertID();
                //$this->data = "";
                //$this->Insumo->id = $id_insumo;
                //$this->request->data['Insumo']['total'] = $cant_entrada;
                //if (!$this->Insumo->save($this->data)){
                //    echo "no guardo";
                //}

                $this->data = "";
                $fecha = date("Y-m-d");
                $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                $this->request->data['Almacen']['preciocompra'] = $pc;
                $this->request->data['Almacen']['ingreso'] = $cantidad;
                $this->request->data['Almacen']['total'] = $cantidad;
                $this->request->data['Almacen']['fecha'] = $fecha;
                //debug($this->data);exit;
                $this->Almacen->create();
                if ($this->Almacen->save($this->data))
                {

                    $this->Session->setFlash('Ingreso registrado con exito!', 'alerts/bueno');
                    $this->redirect(array('action' => 'index'));
                }

                //$this->redirect(array('action' => 'index'), null, true);
            }
            else
            {
                $this->Session->setFlash('No se pudo registrar el Insumo');
            }
        }
        $dct = $this->Tipo->find('all', array('fields' => array('id', 'nombre'), 'conditions' => array('estado' => 1)));
        $this->set(compact('dct'));
        //debug($dct);
    }

    public function modificar($id = null)
    {
        $this->Insumo->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->request->data))
        {
            $this->request->data = $this->Insumo->read();
        }
        else
        {
            if ($this->Insumo->save($this->data))
            {

                $datos_insumo = $this->Insumo->find('first', array('recursive' => -1, 'conditions' => array('id' => $id)));
                $cantidad = $datos_insumo['Insumo']['total'];
                $insumo_almacen = $this->Almacen->find('first', array('recursive' => -1, 'conditions' => array('insumo_id' => $id)));
                $id_almacen = $insumo_almacen['Almacen']['id'];

                //$data=array('id'=>$id_almacen, array('ingreso'=>$cantidad, 'total'=>$cantidad));
                $data = array(
                    'id' => $id_almacen,
                    'ingreso' => $cantidad,
                    'total' => $cantidad);
                //debug($data);exit;

                if ($this->Almacen->save($data))
                {
                    $this->Session->setFlash('Los datos fueron modificados');
                    $this->redirect(array('action' => 'index'), null, true);
                }
                else
                {
                    $this->Session->setFlash('No se pudo modificar!!');
                }
            }
            else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

    public function categoriasalmacen()
    {

        $catalmacen = $this->Tipo->find('all', array(
            'recursive' => -1,
            'conditions' => array('estado' => '1'),
            'order' => array('id' => 'DESC')));
        //debug($catalmacen);
        $this->set(compact('catalmacen'));
    }

    public function deshabilitar($id = null)
    {

        $this->Insumo->id = $id;
        $this->request->data['Insumo']['estado'] = 0;
        if ($this->Insumo->save($this->data))
        {
            $this->Session->setFlash('Se borro el insumo');
            $this->redirect(array('action' => 'index'));
        }
    }
    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Insumo->delete($id)) {
            
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>