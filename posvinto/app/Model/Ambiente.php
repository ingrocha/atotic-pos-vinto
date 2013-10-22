<?php
App::uses('AppModel', 'Model');
/**
 * Ambiente Model
 *
 * @property Mesa $Mesa
 */
class Ambiente extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Mesa' => array(
			'className' => 'Mesa',
			'foreignKey' => 'ambiente_id',
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
