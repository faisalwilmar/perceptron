<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perceptron extends CI_Controller {

	var $perceptron = null;
	var $x_number = 0;
	var $data_number = 0;

	public function index()
	{
		$this->load->view('dimension');
	}

	public function create(){
		$this->x_number = $this->input->post('variables');
		$this->data_number = $this->input->post('rows');

		$data['jumlah_x'] = $this->x_number;
		$data['data_number'] = $this->data_number;
		$this->load->view('form_perceptron',$data);
	}
}
