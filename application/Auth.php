<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{	
		// print_r("login");
		$this->load->view('login');
	}

	public function set_session()
	{	
		$this->load->library('session');
		$array = array( 'id' => TRUE );
		$this->session->set_userdata( $array );
		
		echo "<pre>";
		print_r ($this->session->all_userdata());
		echo "</pre>";
	}
	
	public function destroy_session()
	{	
		$this->load->library('session');
		$this->session->sess_destroy();
		echo "<pre>";
		print_r ($this->session->all_userdata());
		echo "</pre>";
	}
	
	public function login()
	{
		echo "<pre>";
		print_r ("Login");
		echo "</pre>";
	}
}
