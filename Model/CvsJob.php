<?php
App::uses('AppModel', 'Model');
/**
 * CvsJob Model
 *
 * @property Cv $Cv
 * @property Job $Job
 */
class CvsJob extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cv' => array(
			'className' => 'Cv',
			'foreignKey' => 'cv_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
