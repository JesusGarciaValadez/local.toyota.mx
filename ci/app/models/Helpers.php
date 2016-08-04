<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helpers extends CI_Model {


	public function get_models()
	{
		$models = array(
						'le' => 'HIGHLANDER LE',
						'xle' => 'HIGHLANDER XLE',
						'limitedpr' => 'HIGHLANDER Limited PR',
						'limited' => 'HIGHLANDER Limeted'
					);
		
		return $models;
	}

}