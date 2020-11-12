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
           $summary[]=$t['date'];
            
    }
    return $summary;
}
    public function newtopic($data)
    {
        $today=date("Y-m-d H:i:s");
        return $this->db->query("INSERT INTO topics (name,summary,icon,date) VALUES ('$data[0]','$data[1]','NULL','$today')");
    }
    public function post($id)
    {
        $post=null;
        $query= $this->db->order_by('id','DESC')->get_where('post',array('topic_id'=>$id));
        
        $data=$query->result('array');
        $i=0;
        foreach ($data as $t){
                    $post[$i]['name']=$t['name'];
                    $post[$i]['text']=$t['text'];
                    $post[$i]['date']=$t['date'];
                    $i++;
                }
                return $post; 
    }
    public function newpost($data1)
    {
        $today=date("Y-m-d H:i:s");
        return $this->db->query("INSERT INTO post (topic_id,name,text,img,delete_pass,date) VALUES ('$data1[0]','$data1[1]','$data1[2]','','NULL','$today')");
    }
}
