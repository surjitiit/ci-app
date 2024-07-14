<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$this->load->model('user');
		//$pageData['data'] = $this->user->get_last_ten_entries();
		$pageData = [];
		$this->load->view('welcome_message', $pageData);
	}
}
