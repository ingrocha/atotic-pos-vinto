<?php
App::uses('AppModel', 'Model');
/**
 * Reserva Model
 *
 * @property Cliente $Cliente
 * @property Tipoevento $Tipoevento
 */
class Reserva extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipoevento' => array(
			'className' => 'Tipoevento',
			'foreignKey' => 'tipoevento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
