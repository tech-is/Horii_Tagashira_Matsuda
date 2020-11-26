<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbs extends CI_Controller {

	public function __construct()
    {
        // CI_Model constructor の呼び出し
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Bbs_model');
        date_default_timezone_set('Asia/Tokyo');
    }
	public function index()
	{
		
		$data['topic']=$this->Bbs_model->topic();
		$this->load->view('index',$data);
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
		$btn=$this->input->post('btn_submit');
		
		
		if(!empty($btn)){
			$name=$this->input->post('name');
			$summary=$this->input->post('summary');
			$imgpass=$_FILES["img"]["name"];
			$data=array($name,$summary,$imgpass);
			$this->Bbs_model->newtopic($data);
			
		}	
		$this->load->view('newpage');
	}
	
	public function topic()
	{
		$data['id']=$_GET['id'];
		$data['postpage']=$_GET['postpage'];
		$btn=$this->input->post('btn_submit');
		$name=$this->input->post('name');
		$text=$this->input->post('text');
		$data1=array($data['id'],$name,$text);
		//var_dump($data);
		if(!empty($btn)){
			
			$this->Bbs_model->newpost($data1);
			
		}	
	
		$data['topic']=$this->Bbs_model->topic ();
		$data['summary']=$this->Bbs_model->topicsummary($data['id']);
		$data['post']=$this->Bbs_model->post($data['id']);
		$this->load->view('topic',$data);
	}
}

