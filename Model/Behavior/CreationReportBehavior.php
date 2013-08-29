<?php
App::uses('ModelBehavior', 'Model');
App::uses('CakeEmail', 'Network/Email');

class CreationReportBehavior extends ModelBehavior {

/**
 * Send email on model creation
 * @param Model $Model
 * @param type $created
 */	
	public function afterSave(Model $Model, $created) {
		if ($created) {
			$mail = CakeEmail::deliver(
					'admin@job.com', 
					__("New %s created id: %s", 
							$Model->alias, 
							$Model->data[$Model->alias]['id']), 
					__('New %s was created ...', 
							$Model->alias), 
					'default');
		}
	}
}
