<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    //コンストラクタ
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}