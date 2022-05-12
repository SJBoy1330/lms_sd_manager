<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Admin
{

	public function __construct()
	{
		parent::__construct();

		// LOAD MODEL
		$this->load->model('sekolah_m');
	}


	public function index()
	{
		// TITLE
		$mydata['title'] = 'ALPHATECH';


		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/sekolah/sekolah.js') . '"></script>';
		// LOAD DATA

		$mydata['result'] = $this->sekolah_m->get_all();
		// LOAD VIEWS
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display();
	}

	public function tahun_ajaran()
	{
		$mydata['title'] = 'ALPHATECH';

		// LOAD JS
		$this->data['js_add'][] = '<script type="text/javascript" src="' . base_url('assets/js/page/tahun_ajaran/tahunajaran.js') . '"></script>';

		$this->data['content'] = $this->load->view('tahun_ajaran', $mydata, TRUE);
		$this->display();
	}

	public function pembayaran()
	{
		$mydata['title'] = 'ALPHATECH';

		$this->data['content'] = $this->load->view('pembayaran', $mydata, TRUE);
		$this->display();
	}


	public function staf()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('staf', $mydata, TRUE);
		$this->display();
	}


	public function user()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('user', $mydata, TRUE);
		$this->display();
	}


	public function bantuan()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
		$this->display();
	}

	public function kategori_bantuan()
	{
		$mydata['title'] = 'ALPHATECH';
		$this->data['content'] = $this->load->view('kategori_bantuan', $mydata, TRUE);
		$this->display();
	}
}
