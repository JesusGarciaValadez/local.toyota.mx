<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dealer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		show_404();
		//$this->dealers->edit_coords();
	}

	public function search(){

		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		
		if($lat && $lng){
			$dealers = $this->Dealers->search_dealers($lat,$lng);
			if($dealers!=FALSE){
				$data = array('dealers'=>$dealers);
			}else{
				$data = array('error'=>TRUE,'description'=>'No se encontraron distribuidoras.');
			}
		}else{
			$data = array('error'=>TRUE,'description'=>'Ocurrió un error.');
		}

		echo json_encode($data);

	}

	public function json(){

		$json = array(	
						'error' => TRUE,
						'user' => array(
											'status' => 'not_created',
										)
					);

		echo json_encode($json);

	}

}