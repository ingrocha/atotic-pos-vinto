<?php
App::uses('AppModel', 'Model');
/**
 * Porcione Model
 *
 * @property Producto $Producto
 * @property Insumo $Insumo
 */
class Porcione extends AppModel {

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
    public $hasMany = array(
       'Producto'=>array(
          'className'=>'Item',
          'foreignKey'=>'producto_id'
       )
    );
}
