<?php
App::uses('AppModel', 'Model');
/**
 * Pedidosobservacione Model
 *
 * @property Pedido $Pedido
 * @property Item $Item
 * @property Producto $Producto
 * @property Productosobservacione $Productosobservacione
 */
class Pedidosobservacione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pedido' => array(
			'className' => 'Pedido',
			'foreignKey' => 'pedido_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Productosobservacione' => array(
			'className' => 'Productosobservacione',
			'foreignKey' => 'productosobservacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
