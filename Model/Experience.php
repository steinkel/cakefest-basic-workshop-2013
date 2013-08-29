<?php
App::uses('AppModel', 'Model');
/**
 * Experience Model
 *
 * @property Cv $Cv
 */
class Experience extends AppModel {


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
