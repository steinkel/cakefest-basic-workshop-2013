<?php
App::uses('FormHelper', 'View/Helper');

/**
 * AppForm Helper override to use multiple checkboxes by default
 *
 */
class AppFormHelper extends FormHelper {

/**
 * Override select to use checkboxes by default
 * @param type $fieldName
 * @param array $options
 * @param type $attributes
 */	
	public function select($fieldName, $options = array(), $attributes = array()) {
		if (!empty($attributes['multiple'])) {
			$attributes['multiple'] = 'checkbox';
		}
		return parent::select($fieldName, $options, $attributes);
	}
}