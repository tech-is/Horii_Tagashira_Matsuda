<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('session');
	}

	public function index()
	{
		$topics = $this->admin_model->get_topics();
		foreach ($topics as $topic){
			$data['clean_topics'][] = $this->security->xss_clean($topic);
		}
		$this->load->view('admin', $data);
	}

	public function get_post_data()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$id = $this->input->post('topic_id', true)? : null;
			$post_data = $this->admin_model->get_post_data($id);
			foreach ($post_data as $key_num => $data){
				foreach ($data as $key_name => $value){
					$clean_post_data[$key_num][$key_name] = $this->security->xss_clean($value);
				}
			}
			echo json_encode($clean_post_data, JSON_UNESCAPED_UNICODE);
		}else{
			header('location: ../');
			exit;
		}
	}

	public function post_delete()
	{
		$id = $this->input->post('post_id', true)? : null;
		$this->admin_model->post_delete($id);
	}
}
