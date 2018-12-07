<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{

		// echo password_hash('admin',PASSWORD_DEFAULT,['COST'=>10]);
		if($this->input->post('submit')== TRUE)
		{
			$user = $this->input->post('username',TRUE);
			$pass = $this->input->post('password',TRUE);

			$cek = $this->m_admin->get_where('t_admin',array('username'=>$user));
			if($cek->num_rows()>0)
			{
				$data = $cek->row();
				if(password_verify($pass,$data->password))
				{
					$data_user = array(
						'admin'	=> $data->id_admin,
						'user'	=> $data->fullname,
						'level'	=> $data->level,
						'login'	=> TRUE,
					);
					$this->session->set_userdata($data_user);
					redirect ('admin');
				}else{
					$this->session->set_flashdata('cs','Username / Password yang Dimasukan salah');
				}
			}else{ $this->session->set_flashdata('cs','Username / Password yang Dimasukan salah');
			}
		}

		if($this->session->userdata('login')==TRUE)
		{
			redirect('admin');
		}
		$this->load->view('admin/login_form');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */