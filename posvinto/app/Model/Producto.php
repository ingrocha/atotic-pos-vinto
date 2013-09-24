<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Categoria $Categoria
 * @property Insumo $Insumo
 * @property Item $Item
 * @property Porcione $Porcione
 * @property Productosobservacione $Productosobservacione
 */
class Producto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Insumo' => array(
			'className' => 'Insumo',
			'foreignKey' => 'insumo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Porcione' => array(
			'className' => 'Porcione',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Productosobservacione' => array(
			'className' => 'Productosobservacione',
			'foreignKey' => 'producto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
