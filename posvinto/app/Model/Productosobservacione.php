<?php
App::uses('AppModel', 'Model');
/**
 * Productosobservacione Model
 *
 * @property Producto $Producto
 */
class Productosobservacione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
