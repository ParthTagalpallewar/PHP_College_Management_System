<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('homeScreen');
	}
	
	public function homeNavigation($view)
	{

		$this->load->view($view);
	}
	public function studentDashboard()
	{

		$this->load->view("studentDashboard/student_dashboard");
	}
}