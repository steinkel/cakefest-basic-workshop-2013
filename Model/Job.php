<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 * @property Company $Company
 * @property Cv $Cv
 */
class Job extends AppModel {

/**
 * Validation rules
 * @var array
 */
	public $validate = array(
		'name' => array(
			'todayIsWorkday' => array(
				'rule' => array('todayIsWorkday'),
				'message' => "You can't create new jobs in weekends",
				'on' => 'create',
				'last' => true,
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cv' => array(
			'className' => 'Cv',
			'joinTable' => 'cvs_jobs',
			'foreignKey' => 'job_id',
			'associationForeignKey' => 'cv_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

/**
 * Validation rule to check if today is a workday
 * @param string $check
 * @return boolean
 */	
	public function todayIsWorkday($check) {
		$weekday = date('w', $this->getNow());
		if ($weekday == 0 || $weekday == 6) {
			return false;
		}
		
		return true;
	}
	
/**
 * Get today, to be mocked later...
 * @return mixed
 */	
	protected function getNow() {
		return strtotime('now');
	}

}
