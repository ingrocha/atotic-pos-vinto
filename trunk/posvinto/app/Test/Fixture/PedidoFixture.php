<?php
/**
 * PedidoFixture
 *
 */
class PedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'plato_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'plato_id' => 1,
			'cantidad' => 1,
			'usuario_id' => 1,
			'fecha' => '2012-05-29 14:29:52'
		),
	);
}
