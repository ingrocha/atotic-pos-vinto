<?php
App::uses('AppModel', 'Model');
/**
 * Almacen Model
 *
 * @property Insumo $Insumo
 */
class Almacen extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'almacen';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Insumo' => array(
			'className' => 'Insumo',
			'foreignKey' => 'insumo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
