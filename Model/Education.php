<?php
App::uses('AppModel', 'Model');
/**
 * Education Model
 *
 * @property Cv $Cv
 */
class Education extends AppModel {

	public $validate = array(
		'description' => array(
			'minLength' => array(
				'rule' => array('minLength', '8'),
				'message' => 'Description should have at least 8 characters',
				'on' => 'create',
			)
		),
	);

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
		)
	);
}
