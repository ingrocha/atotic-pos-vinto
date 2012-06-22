<?php
App::uses('AppModel', 'Model');
/**
 * PedidosMesa Model
 *
 * @property Pedido $Pedido
 */
class PedidosMesa extends AppModel {

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
		)
	);
}
