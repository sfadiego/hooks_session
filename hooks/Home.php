<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home{
	
	private $ci;
	public function __construct()
	{
		$this->ci =& get_instance();
		!$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
	}

	public function validar_session()
	{
		
		if($this->ci->uri->segment(1) != "Auth")
        {
            if($this->ci->session->userdata('id') == FALSE)
            {
                redirect(site_url('/Auth'));
            }
        }
 		
	}

	


}

/* End of file Home.php */
/* Location: ./application/hooks/Home.php */
