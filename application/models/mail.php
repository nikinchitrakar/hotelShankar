<?php

class Mail extends CI_Model
{
    const DB_TABLE = "usersmail";
    const DB_TABLE_PK = "id";

    public function insert($data)
    {
        $this->db->set('date_time', now(), FALSE);
        $this->db->insert($this::DB_TABLE,$data);
    }

    public function getMail($id=-1,$sortBy='date_time')
    {
        if($id==-1) {
            $this->db->select()->from($this::DB_TABLE)->order_by($sortBy,'desc');
            $result = $this->db->get();
            return $result->result_array();
        }
        else{
            $this->db->select()->from($this::DB_TABLE)->where('id',$id);
            $result=$this->db->get();
            return $result->first_row('array');
        }
    }

    public function delete($id)
    {
        $res=$this->db->where('id',$id)->delete($this::DB_TABLE);
        return $res;
    }
}