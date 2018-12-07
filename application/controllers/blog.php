<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model(array('m_blog','m_admin'));
	}

	public function index()
	{
		$data['data'] 	= $this->m_blog->get_all('t_artikel',array(),TRUE);
		$data['kategori']	= $this->kategori();
		$this->load->view('index',$data);
	}

	public function read()
	{
		$id = $this->uri->segment(3);
		$data['data']	= $this->m_blog->get_where('t_artikel',array('id_artikel'=>$id));
		$this->template->blog('readmore',$data);
	}
	public function all_blog()
	{
		$data['data'] = $this->m_blog->get_all('t_artikel');
		$this->template->blog('all',$data);
	}
	public function about()
	{
		$this->template->blog('about');
	}


	public function kategori()
	{
		$data['kode']	= $this->m_blog->get_all('kategori');
		 $this->load->view('pilihan',$data,TRUE);
	}
	public function per_kategori()
	{
		$id 	= $this->uri->segment(3);
		$data 	= $this->m_blog->get_where('kategori',array('kode_kategori'=>$id));
		if($data->num_rows()>0)
		{
			// $data['data']	= $this->m_blog->get_where('t_artikel',array('kode_kategori'=>$id));
			$data = array(
				'data'=> $this->m_blog->get_where('t_artikel',array('kode_kategori'=>$id)),
			); 
			$this->template->blog('readmore',$data);
		}else{
			show_404();
		}
		
	}
		

}