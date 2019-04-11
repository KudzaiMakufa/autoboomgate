<?php
class Model_Park extends Model_Crud
{
	protected static $_table_name = 'parks';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('rfidno', 'Rfidno', 'required|max_length[255]');
		$val->add_field('clientid', 'Clientid', 'required|max_length[255]');
		$val->add_field('points_left', 'Points Left', 'required|max_length[255]');
		$val->add_field('isin', 'Isin', 'required|max_length[255]');

		return $val;
	}

}
