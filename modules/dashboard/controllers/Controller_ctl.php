<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function index()
	{
		$mydata['title'] = 'ALPHATECH';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/tahun_ajaran/tahunajaran.js') . '"></script>';

		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}
}
