<?php
App::uses('CvsJob', 'Model');

/**
 * CvsJob Test Case
 *
 */
class CvsJobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cvs_job',
		'app.cv',
		'app.education',
		'app.experience',
		'app.job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CvsJob = ClassRegistry::init('CvsJob');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CvsJob);

		parent::tearDown();
	}

}
