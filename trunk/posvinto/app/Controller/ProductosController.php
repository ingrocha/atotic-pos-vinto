<?php

class ProductosController extends AppController
{

    public $helpers = array(
        'Html',
        'Form',
        'Javascript',
        'Ajax');
    public $uses = array(
        'Producto',        
        'Categoria',
        'Porcione',
        'Insumo',
        'Almacen');
    public $layout = "admin";

    public function index()
    {
        $productos = $this->Producto->find('all');
        //debug($productos);exit;
        $this->set(compact('productos')); //68207984
    }

    public function platocompleto()
    {
        
    }

    public function ajaxmodificareceta($id = Null)
    {
        $this->layout = 'ajax';
        $receta = $this->Porcione->find('first', 
                array('conditions'=>
                    array('Porcione.id'=>$id)));
        if(!empty($this->data))
        {
            $cod = $receta['Producto']['id'];
            $this->Porcione->id = $id;
            $cantidad = $this->data['Receta']['cantidad'];
            $this->data = "";
            $this->request->data['Porcione']['cantidad']=$cantidad;
            if($this->Porcione->save($this->data)){
                $this->Session->setFlash("Cantidad Modificada!!!");
                $this->redirect(array('action'=>'receta', $cod));
            }
            
            //if()
            debug($this->data);
        }
        $this->set(compact('receta'));
        //debug($receta);
    }

    public function searchjson()
    {
        //$this->layout='ajax';
        //debug($this->params);
        //$this->Almacen->save
        $insumosJson = array();
        $palabra = $this->request->query['term'];
        $insumos = $this->Insumo->find('all', array(
            'recursive' => -1,
            'conditions' => array('nombre like' => "%$palabra%", 'estado' => 1),
            'fields' => array(
                'id',
                'nombre',
                'fecha')));
        //debug($insumos);
        $i = 0;
        foreach ($insumos as $in)
        {
            $insumosJson[$i]['id'] = $in['Insumo']['id'];
            $insumosJson[$i]['label'] = $in['Insumo']['nombre'];
            $insumosJson[$i]['value'] = $in['Insumo']['fecha'];
            $i++;
        }
        //debug($insumosJson);
        echo json_encode($insumosJson);
        //$this->set($mjson);
        $this->render = false;
        //debug($palabra);
    }

    public function descatmenu($id = null)
    {
        $this->Categoria->id = $id;
        $this->request->data['Categoria']['estado'] = 0;
        if ($this->Categoria->save($this->data))
        {
            $this->Session->setFlash('Se Deshabilito Correctamente');
            $this->redirect(array('action' => 'categoriasmenu'));
        }
    }

    public function habcatmenu($id = null)
    {
        $this->Categoria->id = $id;
        $this->request->data['Categoria']['estado'] = 1;
        if ($this->Categoria->save($this->data))
        {
            $this->Session->setFlash('Se Habilito Correctamente');
            $this->redirect(array('action' => 'categoriasmenu'));
        }
    }

    public function desprodmenu($id = null)
    {
        $this->Producto->id = $id;
        $this->request->data['Producto']['estado'] = 0;
        if ($this->Producto->save($this->data))
        {
            $this->Session->setFlash('Se Oculto Correctamente');
            $this->redirect(array('action' => 'productosmenu'));
        }
    }

    public function habprodmenu($id = null)
    {
        $this->Producto->id = $id;
        $this->request->data['Producto']['estado'] = 1;
        if ($this->Producto->save($this->data))
        {
            $this->Session->setFlash('Se Oculto Correctamente');
            $this->redirect(array('action' => 'productosmenu'));
        }
    }

    public function productosmenu()
    {
        $prod = $this->Producto->find('all', 
                array('recursive' => 0,
                      'conditions'=>array('Producto.estado <='=>1),
                      'order' => 'Producto.id DESC'));
        $this->set(compact('prod'));
        //debug($prod);
    }

    public function ajaxprodmenu($id = null)
    {
        $this->layout = 'ajax';
        $insumo = $this->Insumo->find('first', array('recursive' => -1, 'conditions' =>
            array('id' => $id)));
        $producto_menu = $this->Producto->find('first', array('recursive' => -1,
            'conditions' => array('insumo_id' => $id)));
        $producto_nombre = $producto_menu['Producto']['nombre'];
        $esta = 0;
        if ($producto_menu)
        {
            $esta = 1;
        }
        $this->set(compact('esta'));
        if (!empty($this->data))
        {
            $this->request->data['Producto']['nombre'] = $insumo['Insumo']['nombre'];
            $this->request->data['Producto']['estado'] = 1;
            //debug($this->data);
            if ($this->Producto->save($this->data))
            {
                $id_prod = $this->Producto->getLastInsertID();
                $this->data = "";
                $this->request->data['Porcione']['producto_id'] = $id_prod;
                $this->request->data['Porcione']['insumo_id'] = $id;
                $this->request->data['Porcione']['cantidad'] = 1;
                //debug($this->data);
                if ($this->Porcione->save($this->data))
                {
                    $this->Session->setFlash('Insumo Registrado en menu');
                    $this->redirect(array('action' => 'nuevoprodmenu'));
                }
            }
        } else
        {
            
        }
        $dcc = $this->Categoria->find('list', array('fields' => 'nombre', 'conditions' =>
            array('estado' => 1)));
        $this->set(compact('dcc', 'insumo', 'id'));
    }

    public function nuevoprodmenu()
    {
        $insumos = $this->Insumo->find('all', array(
            'recursive' => 0,
            'conditions' => array('Insumo.estado' => 1),
            'order' => array('Insumo.id' => 'DESC'),
            'limit' => 20));
        $this->set(compact('insumos'));
    }

    public function categoriasmenu()
    {
        $cat = $this->Categoria->find('all', array('recursive' => -1, 'limit' => 20));
        //debug($cat);
        $this->set(compact('cat'));
    }

    public function receta($id = null)
    {
        $platoreceta = $this->Producto->find('first', array('conditions' => array('Producto.id' =>
                $id)));
        $rec = $this->Porcione->find('all', array('recursive' => 1, 'conditions' =>
            array('producto_id' => $id)));
        $id_plato = $id;
        //$plato = $this->Producto->find('all', array('recursive'=>-1, 'conditions'=>array('Producto.id'=>$id)));
        //debug($plato);
        $this->set(compact('rec', 'id_plato', 'platoreceta'));
        //debug($rec);
    }

    public function elimporcionplato($id_porcione = null, $id_producto)
    {
        if (!$id_porcione)
        {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'receta', $id_producto));
        }
        if ($this->Porcione->delete($id_porcione))
        {
            $this->Session->setFlash('Insumo eliminado');
            $this->redirect(array('action' => 'receta', $id_producto));
        }
    }

    public function nuevaporcion($id_plato = null)
    {
        if (!empty($this->data))
        {
            foreach ($this->data as $item)
            {
                $porcion = $this->Porcione->find('first', array('conditions' => array('Porcione.producto_id' =>
                        $id_plato, 'Porcione.insumo_id' => $item['Porcione']['insumo_id'])));
                //debug($porcion);exit;
                if (!empty($porcion))
                {
                    $this->Session->setFlash("Ya tiene registrado el insumo " . $porcion['Insumo']['nombre']);
                    $this->redirect(array('controller' => 'Productos', 'action' => 'nuevaporcion'));
                }
            }
            $this->Porcione->create();
            if ($this->Porcione->saveMany($this->data))
            {
                $this->Session->setFlash('Plato registrado con exito');
                $this->redirect(array('action' => 'receta', $id_plato));
            } else
            {
                $this->Session->setFlash('No se pudo guardar');
                //$this->redirect(array('action' => 'receta'), $id_plato);
            }
        } else
        {
            
        }
        $dci = $this->Insumo->find('list', array('fields' => array('nombre')));
        $plato = $this->Producto->find('first', array('conditions' => array('id' => $id_plato),
            'recursive' => -1));
        $this->set(compact('plato', 'dci'));
        //debug($plato);
    }

    public function platos()
    {
        $this->paginate = array(
            'limit' => 6,
            'order' => array('id' => 'desc'),
            'recursive' => 0,
            'conditions' => array('Categoria.tipo' => 'Comida'));
        // similar to findAll(), but fetches paged results
        $platos = $this->paginate('Producto');
        //debug($platos);
        //print_r($platos);
        $this->set(compact('platos'));
    }

    public function eliminarplato($id = null)
    {
        $this->request->data['Producto']['estado'] = 0;
        $this->Producto->id = $id;
        if ($this->Producto->save($this->data))
        {
            $this->Session->setFlash('Plato eliminado');
            $this->redirect(array('action' => 'platos'));
        }
    }

    public function bebidas()
    {
        $this->paginate = array(
            'limit' => 6,
            'order' => array('id' => 'desc'),
            'recursive' => 0,
            'conditions' => array('Categoria.tipo' => 'Bebidas'));
        // similar to findAll(), but fetches paged results
        $platos = $this->paginate('Producto');
        //debug($platos);
        //print_r($platos);
        $this->set(compact('platos'));
    }

    public function nuevabebida()
    {
        $fecha = date("Y-m-d");
        if (!empty($this->data))
        {
            $datos_insumo = array();
            $datos_insumo = $this->data;
            //debug($this->data);exit;
            $cantidad = $datos_insumo['Producto']['cantidad'];
            $preciocompra = $datos_insumo['Producto']['precio'];
            $this->Producto->create();
            if ($this->Producto->save($this->data))
            {
                $id_producto = $this->Producto->getLastInsertID();
                $this->data = "";
                $this->request->data['Insumo']['nombre'] = $datos_insumo['Producto']['nombre'];
                $this->request->data['Insumo']['preciocompra'] = $datos_insumo['Producto']['precio'];
                $this->request->data['Insumo']['precioventa'] = $datos_insumo['Producto']['precioventa'];
                $this->request->data['Insumo']['total'] = $cantidad;
                $this->request->data['Insumo']['fecha'] = $fecha;
                $this->Insumo->create();
                if ($this->Insumo->save($this->data))
                {
                    $this->data = "";
                    $id_insumo = $this->Insumo->getLastInsertID();
                    $this->request->data['Porcione']['producto_id'] = $id_producto;
                    $this->request->data['Porcione']['insumo_id'] = $id_insumo;
                    $this->request->data['Porcione']['cantidad'] = 1;
                    $this->Porcione->create();
                    if ($this->Porcione->save($this->data))
                    {
                        $this->Session->setFlash('Bebida registrada con exito');
                        //$this->redirect(array('action' => 'bebidas'), null, true);
                    }
                    $this->data = "";
                    $this->request->data['Almacen']['insumo_id'] = $id_insumo;
                    $this->request->data['Almacen']['preciocompra'] = $preciocompra;
                    $this->request->data['Almacen']['ingreso'] = $cantidad;
                    $this->request->data['Almacen']['total'] = $cantidad;
                    $this->request->data['Almacen']['fecha'] = $fecha;
                    $this->Almacen->create();
                    if ($this->Almacen->save($this->data))
                    {
                        $this->Session->setFlash('Bebida registrada con exito');
                        $this->redirect(array('action' => 'bebidas'), null, true);
                    }
                    //debug($this->data);exit;
                }
                //debug($this->data);
                //$this->Session->setFlash('Plato registrado con exito');
                //$this->redirect(array('action' => 'platos'), null, true);
            }
        }
        $dcc = $this->Categoria->find('list', array('conditions' => array('tipo' =>
                'Bebidas'), 'fields' => 'nombre'));
        //debug($dcc);
        $this->set(compact('dcc'));
    }

    public function nuevoplato()
    {
        if (!empty($this->data))
        {
            //debug($this->data);
            $this->Producto->create();
            if ($this->Producto->save($this->data))
            {
                $this->Session->setFlash('Plato registrado con exito');
                $this->redirect(array('action' => 'productosmenu'), null, true);
            }
        }
        $dcc = $this->Categoria->find('list', array('conditions' => array('tipo' =>
                'Comida'), 'fields' => 'nombre'));
        //debug($dcc);
        $this->set(compact('dcc'));
    }

    public function nuevo()
    {
        if (!empty($this->data))
        {
            $this->Producto->create();
            if ($this->Producto->save($this->data))
            {
                $this->Session->setFlash('Producto registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);
            } else
            {
                $this->Session->setFlash('No se pudo registrar el Producto!');
            }
        }
    }

    public function modificar($id = null)
    {
        $this->Producto->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data))
        {
            $this->data = $this->Producto->read();
        } else
        {
            if ($this->Producto->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'bebidas'), null, true);
            } else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dcc = $this->Categoria->find('list', array('conditions' => array('tipo' =>
                'Bebidas'), 'fields' => 'nombre'));
        //debug($dcc);
        $this->set(compact('dcc'));
    }

    public function eliminar($id = null)
    {
        if (!$id)
        {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Producto->delete($id))
        {
            $this->Session->setFlash('El usuario  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function editarcategoria($id = null)
    {
        $this->Categoria->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data))
        {
            $this->data = $this->Categoria->read();
        } else
        {
            if ($this->Categoria->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'categoriasmenu'), null, true);
            } else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dct = array('Comida' => 'Comida', 'Bebidas' => 'Bebidas');
        $this->set(compact('dct'));
        //$dcc = $this->Categoria->find('list', array('conditions' => array('tipo' =>
        //            'Bebidas'), 'fields' => 'nombre'));
        //debug($dcc);
        //$this->set(compact('dcc'));
    }

    public function nuevacategoria()
    {
        if (!empty($this->data))
        {
            $this->Categoria->create();
            if ($this->Categoria->save($this->data))
            {
                $this->Session->setFlash('Categoria registrada!!!');
                $this->redirect(array('action' => 'categoriasmenu'), null, true);
            } else
            {
                $this->Session->setFlash('No se pudo registrar el Producto!');
            }
        }
        $dct = array('Comida' => 'Comida', 'Bebidas' => 'Bebidas');
        $this->set(compact('dct'));
    }

    public function editaprodmenu($id = null)
    {
        $this->Producto->id = $id;
        if (!$id)
        {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data))
        {
            $this->data = $this->Producto->read();
        } else
        {
            if ($this->Producto->save($this->data))
            {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'productosmenu'), null, true);
            } else
            {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
        $dcc = $this->Categoria->find('list', array('conditions' => array('estado' => 1),
            'fields' => 'nombre'));
        //debug($dcc);
        $this->set(compact('dcc'));
    }

}

?>