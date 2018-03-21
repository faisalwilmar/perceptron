<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perceptron extends CI_Controller {

	var $x_number = 0;
	var $data_number = 0;
	var $x_value = array();
	var $out = array('0');
	var $target = array('0');
	var $d_weight = array();
	var $weight_value = array();

	//to add more data use array_push(array_target,value1,value2...)

	public function index()
	{
		// var_dump($this->d_weight);
		$this->load->view('dimension');
	}

	public function create(){
		$this->x_number = $this->input->post('variables');
		$this->data_number = $this->input->post('rows');

		$wanna_push = array();
		for ($i=0; $i < $this->x_number ; $i++) {
			array_push($wanna_push,'0');
		}
		array_push($this->x_value,$wanna_push); //masukin initial X value di baris 0 nilainya 0

		array_push($wanna_push,'0'); //tambahin 1 lagi kolom 0 buat bias
		array_push($this->weight_value,$wanna_push); //masukin initial W value di baris 0 nilainya 0
		array_push($this->d_weight,$wanna_push); //masukin initial delta_weight value di baris 0 nilainya 0
		//
		// var_dump($wanna_push);
		// var_dump($this->x_value);
		// var_dump($this->d_weight);
		// var_dump($this->weight_value);

		$data['jumlah_x'] = $this->x_number;
		$data['data_number'] = $this->data_number;
		// $this->load->view('form_perceptron',$data);
	}

	public function process(){
		for ($i=1; $i <= $this->data_number; $i++) { //ITERASI PER BARIS
			for ($j=1; $j <= $this->x_number ; $j++) { //ITERASI PER KOLOM
				# code...
			}
		}
	}
}
