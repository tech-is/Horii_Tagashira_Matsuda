<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbs extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function edit()
	{
		$this->load->view('edit');
	}
	public function delete()
	{
		$this->load->view('delete');
	}
	public function newpage()
	{
		$this->load->view('newpage');
	}
	public function topic()
	{
		$this->load->view('topic');
	}
}
