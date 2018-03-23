<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perceptron extends CI_Controller {

	var $x_number = 0;
	var $data_number = 0;
	var $alpha = 1;
	var $x_value = array();
	var $net = array('0');
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

		$data['jumlah_x'] = $this->x_number;
		$data['data_number'] = $this->data_number;
		$this->load->view('form_perceptron',$data);
	}

	public function process(){
		$this->x_number = $this->input->post('variables');
		$this->data_number = $this->input->post('rows');
		$this->alpha = $this->input->post('alpha');

		$wanna_push = array();
		for ($i=0; $i < $this->x_number ; $i++) {
			array_push($wanna_push,'0');
		}
		array_push($this->x_value,$wanna_push); //masukin initial X value di baris 0 nilainya 0

		array_push($wanna_push,'0'); //tambahin 1 lagi kolom 0 buat bias
		array_push($this->weight_value,$wanna_push); //masukin initial W value di baris 0 nilainya 0
		array_push($this->d_weight,$wanna_push); //masukin initial delta_weight value di baris 0 nilainya 0

		// var_dump($wanna_push);
		// var_dump($this->x_value);
		// var_dump($this->d_weight);
		// var_dump($this->weight_value);

		for ($i=1; $i <= $this->data_number; $i++) { //ITERASI PER BARIS
			$x_push = array();
			for ($j=1; $j <= $this->x_number ; $j++) { //ITERASI PER KOLOM X
				array_push($x_push,$this->input->post('X'.$j.$i));
			}
			array_push($this->target,$this->input->post('target'.$i));
			array_push($this->x_value,$x_push); //=== baris X baru dan target sudah terisi

			$net_value = 0;
			for ($k=0; $k < $this->x_number ; $k++) {
				$net_value += $this->weight_value[$i-1][$k]*$this->x_value[$i][$k];
			}
			$net_value += $this->weight_value[$i-1][$this->x_number];
			array_push($this->net,$net_value); //=== net baru sudah terisi

			if ($this->net[$i]==0) {
				array_push($this->out,0);
			} else if ($this->net[$i]<0) {
				array_push($this->out,-1);
			} else {
				array_push($this->out,1);
			} //=== out baru sudah terisi

			if ($this->out[$i]!=$this->target[$i]) {
				$dw_push = array();
				for ($g=0; $g < $this->x_number ; $g++) {
					array_push($dw_push,$this->alpha*$this->target[$i]*$this->x_value[$i][$g]);
				}
				array_push($dw_push,$this->alpha*$this->target[$i]);
				array_push($this->d_weight,$dw_push);
			} //=== delta sudah terisi

			$w_push = array();
			for ($h=0; $h <= $this->x_number ; $h++) {
				array_push($w_push,$this->d_weight[$i][$h]+$this->x_value[$i][$h])
			}
			array_push($this->weight_value,$w_push); //=== weight baru sudah terisi
		}
		// var_dump($this->x_value);
	}
}
