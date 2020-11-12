<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_topics()
    {
        $query = $this->db->get_where('topics', array('delete_flag' => 0));
        return $query->result_array();
    }

    public function get_post_data($id)
    {
        $query = $this->db->get_where('post', array('topic_id' => $id, 'delete_flag' => 0));
        return $query->result_array();
    }

    public function post_delete($id)
    {
        $change_data = ['delete_flag' => 1];
        $this->db->where('id', $id);
        $this->db->update('post', $change_data);
    }

    public function bbs_delete($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('bbs', $data);
    }

    public function topic_delete($id)
    {
        $change_data = ['delete_flag' => 1];
        $this->db->where('id', $id);
        $this->db->update('topics', $change_data);
    }
}