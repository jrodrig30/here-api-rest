<?php
App::uses('AppModel', 'Model');
/**
 * EventAttendance Model
 *
 * @property Person $Person
 */
class EventAttendance extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'person_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
