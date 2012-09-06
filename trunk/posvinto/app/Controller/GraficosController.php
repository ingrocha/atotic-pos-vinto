<?php

class GraficosController extends AppController
{ //declaramos la clase controller para se usada con los beneficios del papa controller

    public $helpers = array(
        'Html',
        'Form',
        'FlashChart'); //definimos que ayudantes vamos a usar
    public $uses = array(
        'Cliente',
        'Pedido',
        'Item',
        'Utilidades',
        'Bodega',
        'Insumo'); //definimos las tablas que vamos a utilizar
    public $layout = 'admin';

    public function genera()
    {

    }

    public function insumoshoy()
    {

        $sql = 'SELECT max(id) as cod, insumo_id
                FROM bodegas
                WHERE insumo_id
                IN (
                SELECT id
                FROM insumos
                )
                group by insumo_id';
        $id_insumos = $this->Bodega->query($sql);
        $i = 0;
        $codigos_bodegas = array();
        foreach ($id_insumos as $cod)
        {
            $codigos_bodegas[$i] = $cod['0']['cod'];
            $i++;
        }
        $insumos = $this->Bodega->find('all', array('recursive'=>0, 'conditions' => array('Bodega.id' => $codigos_bodegas)));
        $this->set(compact('insumos'));
        //debug($insumos);
        //debug($codigos);
        //debug($id_insumos);

    }

    public function ventashoy()
    {

        //$hoy = date('d-m-Y');
        $hoy = date('Y-m-d');
        //echo $hoy;
        App::uses('CakeTime', 'Utility');
        $fecha_hoy = CakeTime::dayAsSql($hoy, 'Item.fecha');
        //echo $fecha_hoy;
        $ventas = $this->Item->find('all', array(
            'recursive' => 0,
            'fields' => array('Producto.id, SUM(Item.cantidad) as total, SUM(Item.precio) as precio, Producto.nombre'),
            'group' => array('Item.producto_id'),
            'conditions' => array($fecha_hoy)));
        $this->set(compact('ventas'));
        //debug($ventas);
    }
}
