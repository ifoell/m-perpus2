<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	public function index()
	{
		$data = array(
			'_content'	=> 'book',
			'title' 	=> 'Book'
		);
		$this->load->view('template', $data);
	}

}

/* End of file book.php */
/* Location: ./application/controllers/book.php */