<?php
App::uses('AppModel', 'Model');
/**
 * Company Model
 *
 * @property Job $Job
 */
class Company extends AppModel {

	public $displayField = 'nameId';

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
                        'nameId' => "CONCAT({$this->alias}.name, ' - ', {$this->alias}.{$this->primaryKey})",
                );
        }
}
