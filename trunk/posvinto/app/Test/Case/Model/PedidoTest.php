<?php
App::uses('Pedido', 'Model');

/**
 * Pedido Test Case
 *
 */
class PedidoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.pedido', 'app.plato', 'app.usuario');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pedido = ClassRegistry::init('Pedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pedido);

		parent::tearDown();
	}

}