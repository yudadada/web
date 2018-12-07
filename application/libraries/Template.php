<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	protected $_CI;

	function __construct()
	{
		$this->ci=&get_instance();
	}

	public function admin($template, $data = NULL)
	{
		$data['content'] 	= $this->ci->load->view($template,$data,TRUE);
		$data['nav']		= $this->ci->load->view('admin/Nav',$data,TRUE);
		$this->ci->load->view('admin/Dashboard',$data);
	}

	public function blog($template = null, $data = null)
	{
		$data['content']	= $this->ci->load->view($template,$data,TRUE);

		$this->ci->load->view('Home',$data);
	}
}
