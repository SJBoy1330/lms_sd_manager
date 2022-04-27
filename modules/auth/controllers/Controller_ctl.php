<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function index()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->load->view('index', $mydata);
	}
}
