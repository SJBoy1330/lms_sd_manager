<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{
	public function index()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

    public function kategori_bantuan()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('kategori_bantuan', $mydata, TRUE);
		$this->display();
	}
}