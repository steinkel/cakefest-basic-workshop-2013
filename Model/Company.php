<?php
App::uses('AppModel', 'Model');
App::uses('CakeEmail', 'Network/Email');

/**
 * Company Model
 *
 * @property Job $Job
 */
class Company extends AppModel {

	public $displayField = 'display_name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'company_id',
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
 * Constructor, adding virtual fields
 * @param type $id
 * @param type $table
 * @param type $ds
 */
	public function __construct($id = false, $table = null, $ds = null) {
                parent::__construct($id, $table, $ds);
                $this->virtualFields = array(
                        'display_name' => "CONCAT({$this->alias}.name, ' - ', {$this->alias}.{$this->primaryKey})",
                );
        }

/**
 * Send email on company save
 * @param type $created
 */	
	public function afterSave($created) {
		if ($created) {
			$mail = CakeEmail::deliver(
				'admin@job.com', 
				__("New Company created id: %s", $this->data['Company']['id']), 
				__('New company was created ...'), 
				'default'
			);
		}
	}

/**
 * Sample function to get related jobs to a companyId
 * @param type $companyId
 * @return array Jobs
 */	
	public function getRelatedJobs($companyId) {
		return $this->Job->find('all', array(
			'conditions' => array('Job.company_id' => $companyId),
			'order' => array('Job.created DESC')
		));
	}
}
