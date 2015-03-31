<?php
class getmyform extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('getmyform_v');
	}
	function add(){
					
		$data['name']=$this->input->post('name')."<br/>";
		$data['lastname']=$this->input->post('lastname')."<br/>";
		$data['age']=$this->input->post('age')."<br/>";
		$this->load->view('getmyform_v',$data);
	}
}