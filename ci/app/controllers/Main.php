<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function dealers()
	{
		$this->load->view('template/header');
		$this->load->view('distribuidores');
		$this->load->view('template/footer');
	}

	public function specs()
	{
		$modelo = ($this->uri->segment(2))?$this->uri->segment(2):'chasis';
		$model_f = str_replace('-','_',$modelo);
		$models = $this->Helpers->get_models();
		
		if(!array_key_exists($model_f, $models)){
			$model_f = NULL;
		}

		$this->load->view('template/header',array('tribu'=>'style'));
		$this->load->view('especificaciones',array('modelo'=>$model_f,'modelos'=>$models));
		$this->load->view('template/footer');
	}

}
