<?php

class MY_biodata {

	private $_json;

	public $_name;
	public $_address;
	public $_hobbies;
	public $_is_married;
	public $_school;
	public $_skills;

	public function getJSON() {

		$this->_json = array(

			'name'			=> $this->_name,
			'address'		=> $this->_address,
			'hobbies'		=> $this->_hobbies,
			'is_married'	=> $this->_is_married,
			'school'		=> (object) $this->_school,
			'skills'		=> (object) $this->_skills,

		);

		return json_encode( $this->_json );

	}

}

$my_biodata 				= new MY_biodata();
$my_biodata->_name 			= 'Achmad Fatur Rizky';
$my_biodata->_address 		= 'Jl. Purwomukti Barat 1 No 07';
$my_biodata->_hobbies		= array( 'Coding', 'Traveling' );
$my_biodata->_is_married	= false;
$my_biodata->_school		= array(

	'highSchool'	=> 'SMK Negeri 9 Semarang',
	'university'	=> 'unknown'		

);
$my_biodata->_skills		= array( 'Web Design' , 'UI/UX Design' , 'Web Programming', 'PHP Native' );

echo $my_biodata->getJSON();