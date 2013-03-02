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
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'mesa' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'comment' => '0 creado, 1 impreso y cosina, 2 servido, 3 pagado, 4 facturado'),
		'total' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '15,2'),
		'descuento' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'monto' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '15,2'),
		'fechac' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
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
			'user_id' => 1,
			'fecha' => '2013-03-02 22:23:33',
			'mesa' => 1,
			'estado' => 1,
			'total' => 1,
			'descuento' => 1,
			'monto' => 1,
			'fechac' => 'Lorem ip',
			'created' => '2013-03-02'
		),
	);

}
