<?php
class Frame extends SS_Controller{
	function __construct(){
		$this->require_permission_check=false;
		parent::__construct();
	}
	
	function index(){
		$this->output->as_ajax=false;
		
		if(!$this->user->isLogged()){
			redirect('login');
		}
		
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('menu');
		$this->load->view('frame');
		$this->load->view('foot');
	}
}
?>