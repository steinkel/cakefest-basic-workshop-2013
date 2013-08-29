<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 * @property Company $Company
 * @property Cv $Cv
 */
class Job extends AppModel {


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

}
