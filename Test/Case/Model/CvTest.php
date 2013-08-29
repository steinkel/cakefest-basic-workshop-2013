<?php
App::uses('Cv', 'Model');

/**
 * Cv Test Case
 *
 */
class CvTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cv',
		'app.education',
		'app.experience',
		'app.job',
		'app.cvs_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cv = ClassRegistry::init('Cv');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cv);

		parent::tearDown();
	}

}
