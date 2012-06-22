<?php
App::uses('AppModel', 'Model');
/**
 * Insumo Model
 *
 * @property TiposInsumo $TiposInsumo
 * @property Inicioventa $Inicioventa
 * @property Porcione $Porcione
 * @property Tipo $Tipo
 */
class Insumo extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TiposInsumo' => array(
			'className' => 'TiposInsumo',
			'foreignKey' => 'tipos_insumo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inicioventa' => array(
			'className' => 'Inicioventa',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'joinTable' => 'tipos_insumos',
			'foreignKey' => 'insumo_id',
			'associationForeignKey' => 'tipo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
