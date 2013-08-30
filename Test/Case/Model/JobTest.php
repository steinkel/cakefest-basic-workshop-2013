<?php
App::uses('Job', 'Model');

/**
 * Job Test Case
 *
 */
class JobTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.job',
		'app.company',
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
		$this->Job = ClassRegistry::init('Job');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Job);

		parent::tearDown();
	}

/**
 * testTodayIsWorkday method
 *
 * @return void
 */
	public function testTodayIsWorkdaySuccess() {
		$jobMock = $this->getMockForModel('Job', array('getNow'));
		$jobMock->expects($this->once())
			->method('getNow')
			->will($this->returnValue(strtotime('next thursday')));
		$result = $jobMock->todayIsWorkday(array());
		$this->assertTrue($result, 'next thursday should be a workday');
	}

/**
 * testTodayIsWorkday shall not pass
 *
 * @return void
 */
	public function testTodayIsWorkdayFail() {
		$jobMock = $this->getMockForModel('Job', array('getNow'));
		$jobMock->expects($this->once())
			->method('getNow')
			->will($this->returnValue(strtotime('next sunday')));
		$result = $jobMock->todayIsWorkday(array());
		$this->assertFalse($result, 'next sunday should NOT be a workday');
	}
	
	public function testTodayIsWorkdaySuccessAndFail() {
		$jobMock = $this->getMockForModel('Job', array('getNow'));
		$jobMock->expects($this->at(0))
			->method('getNow')
			->will($this->returnValue(strtotime('next sunday')));
		$jobMock->expects($this->at(1))
			->method('getNow')
			->will($this->returnValue(strtotime('next thursday')));
		$result = $jobMock->todayIsWorkday(array());
		$this->assertFalse($result, 'next sunday should NOT be a workday');
		$result = $jobMock->todayIsWorkday(array());
		$this->assertTrue($result, 'next thursday should NOT be a workday');
	}
}
