<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends ci_controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('');
		}

		function home()
		{
			$this->load->view('view_home');
		}
	}
