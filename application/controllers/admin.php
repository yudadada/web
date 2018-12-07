<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('Template','form_validation'));
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->cek_login();
		$data['data'] 	= $this->m_admin->get_all('t_artikel');
		$this->template->admin('admin/home',$data);
	}

	public function edit_profil()
	{
		$this->cek_login();

		if($this->input->post('submit',TRUE)== 'submit')
		{
			$this->form_validation->set_rules('username','Username','required|trim|min_length[3]');
			$this->form_validation->set_rules('fullname','Fullname',"required|trim|min_length[3]|regex_match[/^[a-z A_Z.']+$/]");
			$this->form_validation->set_rules('email','Email','required|trim|valid_email');
			$this->form_validation->set_rules('password','Fullname','required');

			if($this->form_validation->run()==TRUE)
			{
				$id_admin = $this->m_admin->get_where('t_admin',array('id_admin'=>$this->session->userdata('admin')))->row();
				if(!password_verify($this->input->post('password',TRUE),$id_admin->password))
				{
					echo "<script type='text/javascript'>alert('Password Yang di masukan salah');window.location.replace('".base_url()."login/logout');</script>";
				}else{
				$data = array(
					'username'	=> $this->input->post('username',TRUE),
					'fullname'	=> $this->input->post('fullname',TRUE),
					'email'		=> $this->input->post('email',TRUE),
				);
				$cek_update = array(
					'id_admin'	=> $this->session->userdata('admin')
				);
				$proses = $this->m_admin->update('t_admin',$data,$cek_update);
				redirect('admin');
				}
			}
		}
		$ambil = $this->m_admin->get_where('t_admin',array('id_admin'=>$this->session->userdata('admin')))->row();
		$data['username']	= $ambil->username;
		$data['fullname']	= $ambil->fullname;
		$data['email']		= $ambil->email;
		$data['header']	= "Edit Profil";
		$this->template->admin('admin/profil_form',$data);
	}

	public function update_password()
	{
		$this->cek_login();
		if($this->input->post('submit',TRUE)== 'submit')
		{
			$this->form_validation->set_rules('old_pass','Old password','required');
			$this->form_validation->set_rules('new_pass','New password','required');
			if($this->form_validation->run()==TRUE)
			{
				$id_admin = $this->m_admin->get_where('t_admin',array('id_admin'=> $this->session->userdata('admin')))->row();
				if(!password_verify($this->input->post('old_pass',TRUE),$id_admin->password))
				{
					echo "<script type='text/javascript'>alert('password Tidak sesuai');</script>";
				}
				else{
					$pass 				= $this->input->post('new_pass',TRUE);
					$data['password'] 	= password_hash($pass,PASSWORD_DEFAULT,['COST'=>10]);

					$cek_update = array(
						'id_admin'=> $this->session->userdata('admin')
					);

					$this->m_admin->update('t_admin',$data,$cek_update);
					redirect('login/logout');

				}
			}
		}
		$data['header'] = "Update Password";
		$this->template->admin('admin/pass_update',$data);
	}

	public function cek_login()
	{
		if(!$this->session->userdata('admin'))
		{
			redirect('login');
		}
	}
}