<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {

    const DB_TABLE1="mobiles";
    const DB_TABLE2="tablets";
    const DB_TABLE3="accessories";

    public function getAll($page)
    {
        switch($page)
        {
            case "mobile": {
                return $this->db->from($this::DB_TABLE1)->get()->result_array();
                break;
            }
            case "tablet":{
                return $this->db->from($this::DB_TABLE2)->get()->result_array();
                break;
            }
            case "accessory": {
                return $this->db->from($this::DB_TABLE3)->get()->result_array();
                break;
            }
            case "new_release": {
                $a['mobile']= $this->db->from($this::DB_TABLE1)->like('launch','2016')->get()->result_array();
                $a['tablet']= $this->db->from($this::DB_TABLE2)->like('launch','2016')->get()->result_array();
                return $a;
                break;
            }
        }

    }

}