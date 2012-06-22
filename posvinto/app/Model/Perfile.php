<?php
App::uses('AppModel', 'Model');
/**
 * Perfile Model
 *
 * @property Usuario $Usuario
 */
class Perfile extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'perfile_id',
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
    
    //Le decimos que se comporte como ACL.
    var $actsAs = array('Acl' => array('requester'));
    
    /*Creada para su uso con el AclBehavior*/
    function parentNode() {
    	return null;
    }

}
