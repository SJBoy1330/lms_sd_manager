<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('lms_manager_id_user')) {
			redirect('dashboard');
		}
		$mydata['title'] = 'ALPHATECH';
		$this->load->view('index', $mydata);
	}

	public function func_login()
	{
		$post = deklarasi_double(array('username' => 'User ID', 'password' => 'Kata sandi'));

		if (isset($post['comment'])) {
			foreach ($post['comment'] as $field => $value) {
				$data[$field] = $value;
			}
		}
		if (!in_array(FALSE, $post['arrAccess'])) {
			// CEK USER
			$user = $this->user_m->get_single(array('username' => $post['variabel']['username']));
			if ($user) {
				// CEK PASSWORD
				if (hash_my_password($post['variabel']['username'] . $post['variabel']['password']) == $user->password) {

					$this->session->set_userdata('lms_manager_id_user', $user->id_user);
					$data['status'] = TRUE;
					$data['alert']['title'] = 'PEMBERITAHUAN';
					$data['alert']['message'] = 'Anda berhasil login!';
					$data['redirect'] = base_url('dashboard');
					echo json_encode($data);
					exit;
				} else {
					$data['status'] = FALSE;
					$data['alert']['title'] = 'PERINGATAN';
					$data['alert']['message'] = 'Kata sandi salah!';
					echo json_encode($data);
					exit;
				}
			} else {
				$data['status'] = FALSE;
				$data['alert']['title'] = 'PERINGATAN';
				$data['alert']['message'] = 'User ID tidak terdaftar !';
				echo json_encode($data);
				exit;
			}
		} else {
			$data['status'] = FALSE;
			echo json_encode($data);
			exit;
		}
	}
}
