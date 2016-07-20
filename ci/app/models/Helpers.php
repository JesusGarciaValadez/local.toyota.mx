<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helpers extends CI_Model {


	public function get_models()
	{
		$models = array(
						'coremt' => 'HIGHLANDER LE',
						'corectvis' => 'HIGHLANDER XLE'
					);
		
		return $models;
	}

}