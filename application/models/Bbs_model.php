<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbs_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function topic()
    {
        
        $data= $this->db->get('topics')->result_array();
        foreach ($data as $t)
        {
                $topic[$t['id']]=$t['name'];
                }
                return $topic;
    }
    public function topicsummary ($id)
    {
        $query=$this->db->get_where('topics',array('id'=>$id));
        $data=$query->result('array');
        foreach ($data as $t){
           $summary[]=$t['name'];
           $summary[]=$t['summary'];  
            
    }
    return $summary;
}
    public function newtopic($data)
    {
        return $this->db->query("INSERT INTO topics (name,summary,icon) VALUES ('$data[0]','$data[1]','NULL')");
    }
    public function post($id)
    {
        $post=null;
        $query= $this->db->get_where('post',array('topic_id'=>$id));
        
        $data=$query->result('array');
        foreach ($data as $t){
                    $post[$t['name']]=$t['text'];
                    
                }
                return $post; 
    }
    public function newpost($data1)
    {
        return $this->db->query("INSERT INTO post (topic_id,name,text,img,delete_pass) VALUES ('$data1[0]','$data1[1]','$data1[2]','','NULL')");
    }
}
