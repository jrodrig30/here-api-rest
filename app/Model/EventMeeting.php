<?php
App::uses('AppModel', 'Model');
/**
 * EventMeeting Model
 *
 * @property Event $Event
 */
class EventMeeting extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'details';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
