<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct()
	{
		parent::__construct();

        $this->load->library('template');
	}

	public function index()
	{
		$this->template->load_view('dashboard');
	}

}

/* End of file user.php */
/* Location: ./application/modules/user/controllers/user.php */