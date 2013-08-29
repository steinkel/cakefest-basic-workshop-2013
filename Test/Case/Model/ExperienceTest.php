<?php
App::uses('Experience', 'Model');

/**
 * Experience Test Case
 *
 */
class ExperienceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.experience',
		'app.cv',
		'app.education',
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
		$this->Experience = ClassRegistry::init('Experience');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Experience);

		parent::tearDown();
	}

}
