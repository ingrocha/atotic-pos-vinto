<?php
App::uses('AppModel', 'Model');
/**
 * Clase Model
 *
 * @property Categoria $Categoria
 */
class Clase extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'clase_id',
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
