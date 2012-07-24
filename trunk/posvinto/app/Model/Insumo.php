<?php
App::uses('AppModel', 'Model');
/**
 * Insumo Model
 *
 * @property Movimiento $Movimiento
 * @property Porcione $Porcione
 */
class Insumo extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Movimiento' => array(
			'className' => 'Movimiento',
			'foreignKey' => 'insumo_id',
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
			'foreignKey' => 'insumo_id',
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
