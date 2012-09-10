<?php
App::uses('AppModel', 'Model');
/**
 * Tipoevento Model
 *
 * @property Reserva $Reserva
 */
class Tipoevento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Reserva' => array(
			'className' => 'Reserva',
			'foreignKey' => 'tipoevento_id',
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
