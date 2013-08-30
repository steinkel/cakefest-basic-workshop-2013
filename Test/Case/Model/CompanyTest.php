<?php
App::uses('Company', 'Model');

/**
 * Company Test Case
 *
 */
class CompanyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.company',
		'app.job',
		'app.cv',
		'app.education',
		'app.experience',
		'app.cvs_job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Company = ClassRegistry::init('Company');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Company);

		parent::tearDown();
	}

/**
 * testGetRelatedJobs method
 *
 * @return void
 */
	public function testGetRelatedJobs() {
		$companyId = 1;
		
		$jobs = $this->Company->getRelatedJobs($companyId);
		//debug($jobs);
		
		// we want to test:
		// there are 2 jobs related to this companyId
		$this->assertEquals(2, count($jobs));
		
		// jobs belongs to company id = $companyId
		$companyIdExtracted = Hash::extract($jobs, '{n}.Job.company_id');
		$this->assertEquals(1, count(array_unique($companyIdExtracted)));

		// jobs are ordered by creation date
		$jobIdExtracted = Hash::extract($jobs, '{n}.Job.id');
		$expectedIdOrder = array(2, 1);
		$this->assertEquals($expectedIdOrder, $jobIdExtracted, 'Jobs are not ordered by date');
	}

}
