<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index()
	{
		$data = array(
			'_content'	=> 'category',
			'title' 	=> 'Category'
		);
		$this->load->view('template', $data);
	}

}

/* End of file category.php */
/* Location: ./application/controllers/category.php */