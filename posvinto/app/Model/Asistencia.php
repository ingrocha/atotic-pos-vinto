<?php
App::uses('AppModel', 'Model');
/**
 * Asistencia Model
 *
 * @property Insumo $Insumo
 */
class Asistencia extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'asistencias';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
