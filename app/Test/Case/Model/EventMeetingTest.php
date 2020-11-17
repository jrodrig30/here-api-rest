<?php
App::uses('EventMeeting', 'Model');

/**
 * EventMeeting Test Case
 *
 */
class EventMeetingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event_meeting',
		'app.event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EventMeeting = ClassRegistry::init('EventMeeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EventMeeting);

		parent::tearDown();
	}

}
