<?php
/**
 * CompanyFixture
 *
 */
class CompanyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 2,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 3,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 4,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 5,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 6,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 7,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 8,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 9,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
		array(
			'id' => 10,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-10-05 13:02:59',
			'modified' => '2012-10-05 13:02:59'
		),
	);

}
