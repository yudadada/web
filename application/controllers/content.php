<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('Template','form_validation'));
		$this->load->model(array('m_admin','m_blog'));
	}

	public function index()
	{
		$this->cek_login();
		$data['data'] 	= $this->m_admin->get_all('t_artikel');
		$data['header']	= "Manage Content";
		$this->template->admin('admin/manage_isi',$data);
	}

	public function add()
	{
		$this->cek_login();
		if($this->input->post('submit',TRUE)=='submit')
		{
			$this->form_validation->set_rules('judul','Judul','required');
			$this->form_validation->set_rules('isi','Isi','required');
			$this->form_validation->set_rules('penulis','Penulis','required');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->set_rules('kode','Kode','required');
		}
		if($this->form_validation->run()==TRUE)
		{
			$config['upload_path']		= './gambar';
			$config['allowed_types']	= 'jpg|jpeg|png';
			$config['max_size']			= '10000';
			$config['file_name']		= 'gambar'.time();

			$this->load->library('upload',$config);

			if($this->upload->do_upload('gambar'))
			{
				$gambar = $this->upload->data();

				$insert = array(
				'penulis'	=> ucwords($this->input->post('penulis',TRUE)),
				'judul'		=> ucwords($this->input->post('judul',TRUE)),
				'status'	=> ucwords($this->input->post('status',TRUE)),
				'tanggal'	=> $this->input->post('tanggal',TRUE),
				'gambar'	=> $gambar['file_name'],
				'isi'		=> ucwords($this->input->post('isi',TRUE)),
				'kode_kategori'	=> ucwords($this->input->post('kode',TRUE)),
			);
			$this->m_admin->insert('t_artikel',$insert);
			redirect('content');
			}else{
				$this->session->set_flashdata('alert','foto belum di pilih');
			}
		}
		$data['penulis']	= $this->input->post('penulis');
		$data['judul']		= $this->input->post('judul');
		$data['status']		= $this->input->post('status');
		$data['isi']		= $this->input->post('isi');
		$data['tanggal']	= $this->input->post('tanggal');
		$data['kode']		= $this->input->post('kode');
		$data['header'] = "Form Insert";
		$this->template->admin('admin/form_insert',$data);
	}

	public function detail()
	{
		$this->cek_login();
		$id 	= $this->uri->segment(3);
		$isi 	= $this->m_admin->get_where('t_artikel',array('id_artikel'=> $id));

		foreach($isi->result() as $key)
		{
			$data['judul'] 		= $key->judul;
			$data['penulis']	= $key->penulis;
			$data['isi']		= $key->isi;
			$data['gambar']		= $key->gambar;
			$data['id']			= $key->id_artikel;
			$data['tanggal']	= $key->tanggal;
			$data['kode']		= $key->kode_kategori;
		}
		$data['header']	= 'Detail';
		$this->template->admin('admin/detail',$data);
	}

	public function update()
	{
		$this->cek_login();
		$id_artikel = $this->uri->segment(3);
		if($this->input->post('submit',TRUE)=='submit')
		{
			$this->form_validation->set_rules('judul','Judul','required');
			$this->form_validation->set_rules('isi','Isi','required');
			$this->form_validation->set_rules('penulis','Penulis','required');
			$this->form_validation->set_rules('tanggal','Tanggal','required');
			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->set_rules('kode','Kode','required');
		}
		if($this->form_validation->run()==TRUE)
		{
			$config['upload_path']		= './gambar';
			$config['allowed_types']	= 'jpg|jpeg|png';
			$config['max_size']			= '2000';
			$config['file_name']		= 'gambar'.time();

			$this->load->library('upload',$config);
			$insert = array(
				'penulis'	=> $this->input->post('penulis',TRUE),
				'judul'		=> $this->input->post('judul',TRUE),
				'status'	=> $this->input->post('status',TRUE),
				'tanggal'	=> $this->input->post('tanggal',TRUE),
				'isi'		=> $this->input->post('isi',TRUE),
				'kode_kategori'	=> $this->input->post('kode',TRUE),
			);
			if($this->upload->do_upload('gambar'))
			{
				$gambar = $this->upload->data();
				unlink('./gambar/'.$this->input->post('lama',TRUE));
				$insert['gambar']	= $gambar['file_name'];
				$this->m_admin->update('t_artikel',$insert,array('id_artikel'=>$id_artikel));
			}else{
				$this->m_admin->update('t_artikel',$insert,array('id_artikel'=>$id_artikel));
			}
			redirect('content');
		}
		$item = $this->m_admin->get_where('t_artikel',array('id_artikel'=> $id_artikel));

		foreach ($item->result() as $key) {
			$data['penulis']	= $key->penulis;
			$data['judul']		= $key->judul;
			$data['status']		= $key->status;
			$data['isi']		= $key->isi;
			$data['tanggal']	= $key->tanggal;
			$data['gambar']		= $key->gambar;
			$data['kode']		= $key->kode_kategori;
		}
		$data['header'] = "Form Update";
		$this->template->admin('admin/form_insert',$data);
	}

	public function delete()
	{
		if($this->uri->segment(3))
		{
			$id = $this->uri->segment(3);
			$this->m_blog->del('t_artikel',array('id_artikel'=> $id));
			redirect('content');
		}else{
			echo "<script type='text/javascript'>alert('Data tidak Berhasil Di hapus');</script>";
		}
		
	}

	public function cek_login()
	{
		if(!$this->session->userdata('admin'))
		{
			redirect('login');
		}
	}

}