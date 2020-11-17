<?php
App::uses('EventAttendance', 'Model');

/**
 * EventAttendance Test Case
 *
 */
class EventAttendanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event_attendance',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventAttendance = ClassRegistry::init('EventAttendance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventAttendance);

		parent::tearDown();
	}

}
