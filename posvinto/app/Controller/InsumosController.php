<?php
class InsumosController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $uses = array('Insumo', 'Almacen', 'Bodega');
    public $layout = 'admin';

    public function index()
    {
        $this->paginate = array('limit' => 50, 'order' => array('Insumo.id' => 'desc'));
        // similar to findAll(), but fetches paged results
        $insumos = $this->paginate('Insumo');
        //debug($insumos);
        $this->set(compact('insumos'));
        //$insumos = $this->Insumo->find('all');
        //$this->set(compact('insumos'));
    }

    public function salidas()
    {

        if (!empty($this->data)) {
            $datos = array();
            //debug($this->data);
            $i = 0;
            foreach ($this->data as $d) {
                //debug($d);
                //print_r($d);
                for ($c = 0; $c < count($d); $c++) {
                    
                    //echo "el insumo for".$d[$c]['cantidad']."<br />";                    
                    //guardamos
                    $cant_salida = $d[$c]['cantidad'];
                    $id_insumo = $d[$c]['insumo_id'];
                    
                    //$pc = $this->data['Movimiento']['pc'];
                    $pc=0;
                    $existe_insumo = $this->Almacen->find('first', array(
                        'conditions' => array('insumo_id' => $id_insumo),
                        'order' => 'id DESC',
                        'recursive' => -1));
                    //debug($existe_insumo);exit;
                    if($existe_insumo) {

                        $total_anterior = $existe_insumo['Almacen']['total'];
                        $cant_actual = $total_anterior - $cant_salida;

                        $this->data = "";
                        $this->Insumo->id = $id_insumo;
                        $this->request->data['Insumo']['total'] = $cant_actual;

                        if (!$this->Insumo->save($this->data)) {
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
                        if ($this->Almacen->save($this->data)) {
                            //$this->Session->setFlash('Ingreso registrado con exito!');
                            //$this->redirect(array('action' => 'index'));
                        }
                    } else {

                        //$this->data="";
                        $this->Insumo->id = $id_insumo;
                        $this->request->data['Insumo']['total'] = $cant_salida;
                        if (!$this->Insumo->save($this->data)) {
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
                        if ($this->Almacen->save($this->data)) {
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

        } else {
            $dci = $this->Insumo->find('list', array('fields' => array('nombre')));
            //debug($dci);
            $this->set(compact('dci'));
        }

    }
    
    public function bodega(){
        
        $this->paginate = array('limit' => 6, 'order' => array('id' => 'desc'));
        // similar to findAll(), but fetches paged results
        $bodega = $this->paginate('Bodega');
        //debug($insumos);        
        $this->set(compact('bodega'));
        //$insumos = $this->Insumo->find('all');
        //$this->set(compact('insumos'));            
    }
    
    function _guardabodega(){
        
        echo 'esta es la funcion';
        
    }

    public function salidalmacen($id = null)
    {

        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $cant_salida = $this->data['Movimiento']['salida'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo) {

                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior - $cant_salida;

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;

                if (!$this->Insumo->save($this->data)) {
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
                if($this->Almacen->save($this->data)){
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    //$this->redirect(array('action' => 'index'));
                }
                
                $existe_insumo_bodega = $this->Bodega->find('first', array(
                
                    'conditions' => array('insumo_id' => $id_insumo),
                    'order' => 'id DESC',
                    'recursive' => -1));
                
                if($existe_insumo_bodega){
                    
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    
                    $mod_bodega = $this->Insumo->find('first', array('conditions'=>array('id'=>$id_insumo), 'recursive'=>-1));
                    $this->data="";
                    
                    $this->request->data['Insumo']['bodega']=$cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    $this->Insumo->id=$id_mod_insumo;
                    
                    if($this->Insumo->save($this->data)){
                        
                    } 
                    
                    $this->data = "";
                    $this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_bodega_actual;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    //$this->Bodega->create();
                                    
                    if($this->Bodega->save($this->data)){
                        $this->redirect(array('action' => 'bodega'));        
                    }else{
                        echo "no guardo";
                    } 
                       
                }else{
                    
                    $cantidad_bodega = $existe_insumo_bodega['Bodega']['total'];
                    $id_bodega = $existe_insumo_bodega['Bodega']['id'];
                    $cant_bodega_actual = $cantidad_bodega + $cant_salida;
                    
                    $mod_bodega = $this->Insumo->find('first', array('conditions'=>array('id'=>$id_insumo), 'recursive'=>-1));
                    $this->data="";
                    
                    $this->request->data['Insumo']['bodega']=$cant_bodega_actual;
                    $id_mod_insumo = $mod_bodega['Insumo']['id'];
                    $this->Insumo->id=$id_mod_insumo;
                    
                    if($this->Insumo->save($this->data)){
                        
                    }
                    
                    $this->data = "";
                    //$this->Bodega->id = $id_bodega;
                    $this->request->data['Bodega']['insumo_id'] = $id_insumo;
                    $this->request->data['Bodega']['preciocompra'] = $pc;
                    $this->request->data['Bodega']['ingreso'] = $cant_salida;
                    $this->request->data['Bodega']['total'] = $cant_salida;
                    $this->request->data['Bodega']['fecha'] = $fecha;
                    $this->Bodega->create();
                                    
                    if($this->Bodega->save($this->data)){
                        $this->redirect(array('action' => 'bodega'));        
                    }else{
                        echo "no guardo";
                    }
                }                                
                                                
            } else {

                //$this->data="";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_salida;
                if (!$this->Insumo->save($this->data)) {
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
                if ($this->Almacen->save($this->data)) {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            }
            //debug($this->data);
        } else {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id),
                    'recursive' => -1));
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
        if (!empty($this->data)) {

            $cant_entrada = $this->data['Movimiento']['entrada'];
            $id_insumo = $this->data['Movimiento']['id_insumo'];
            $pc = $this->data['Movimiento']['pc'];
            $existe_insumo = $this->Almacen->find('first', array(
                'conditions' => array('insumo_id' => $id_insumo),
                'order' => 'id DESC',
                'recursive' => -1));
            //debug($existe_insumo);exit;
            if ($existe_insumo) {

                $total_anterior = $existe_insumo['Almacen']['total'];
                $cant_actual = $total_anterior + $cant_entrada;

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_actual;
                if (!$this->Insumo->save($this->data)) {
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
                if ($this->Almacen->save($this->data)) {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            } else {

                $this->data = "";
                $this->Insumo->id = $id_insumo;
                $this->request->data['Insumo']['total'] = $cant_entrada;
                if (!$this->Insumo->save($this->data)) {
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
                if ($this->Almacen->save($this->data)) {
                    $this->Session->setFlash('Ingreso registrado con exito!');
                    $this->redirect(array('action' => 'index'));
                }
            }
            //debug($this->data);
        } else {
            //debug($this->data);
            $insumo = $this->Insumo->find('first', array('conditions' => array('id' => $id),
                    'recursive' => -1));
            //debug($insumo);
            $this->set(compact('insumo'));
        }
    }

    public function nuevo()
    {
        $fecha = date("Y-m-d");
        if (!empty($this->data)) {
            $this->request->data['Insumo']['fecha'] = $fecha;
            $this->Insumo->create();
            if ($this->Insumo->save($this->data)) {
                $this->Session->setFlash('Insumo registrado con exito');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('No se pudo registrar el Insumo');
            }
        }
        //$dct = $this->TiposInsumo->find('list', array('fields' => 'TiposInsumo.nombre'));
        //$this->set(compact('dct', 'options'));
        //debug($dct);
    }

    public function modificar($id = null)
    {
        $this->Insumo->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Insumo->read();

        } else {
            if ($this->Insumo->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }

    public function eliminar($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('id Invalida para borrar');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Insumo->delete($id)) {

            $this->Session->setFlash('El Insumo  ' . $id . ' fue borrado');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>