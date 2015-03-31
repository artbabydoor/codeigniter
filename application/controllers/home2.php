<?php
	class home2 extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		function index(){
			$this->load->view('template_v');
		}
	}
	