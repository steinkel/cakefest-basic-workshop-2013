<?php
App::uses('AppModel', 'Model');
/**
 * Cv Model
 *
 * @property Education $Education
 * @property Experience $Experience
 * @property Job $Job
 */
class Cv extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Education' => array(
			'className' => 'Education',
			'foreignKey' => 'cv_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Experience' => array(
			'className' => 'Experience',
			'foreignKey' => 'cv_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Job' => array(
			'className' => 'Job',
			'joinTable' => 'cvs_jobs',
			'foreignKey' => 'cv_id',
			'associationForeignKey' => 'job_id',
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