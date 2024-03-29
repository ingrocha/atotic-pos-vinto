<?php
App::uses('AppModel', 'Model');
/**
 * TiposInsumo Model
 *
 * @property Insumo $Insumo
 */
class TiposInsumo extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Insumo' => array(
			'className' => 'Insumo',
			'foreignKey' => 'tipos_insumo_id',
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
