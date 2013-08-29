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

	public $displayField = 'display_name';

	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'message' => 'Please enter a valid email'
			),
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Please enter an unique email'
			),
		),
	);


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
			'dependent' => true,
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
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UnfinishedPosition' => array(
			'className' => 'Experience',
			'conditions' => array(
				'UnfinishedPosition.end_date > NOW()',
			),
		),
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

/**
 * Constructor, adding virtual fields
 * @param type $id
 * @param type $table
 * @param type $ds
 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->virtualFields = array(
			'display_name' => "CONCAT({$this->alias}.first_name, ' ', {$this->alias}.last_name, ' - ', {$this->alias}.{$this->primaryKey})",
		);
	}

}
