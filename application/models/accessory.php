<?php

class Accessory extends CI_Model
{
    const DB_TABLE = "accessories";
    const DB_TABLE_PK = "id";

    public function getTablet($id=-1,$sortBy="name")
    {
        if($id==-1)
        {
            $this->db->select()->from($this::DB_TABLE)->order_by($sortBy,'desc');
            $result=$this->db->get();
            return $result->result_array();
        }
        else
        {
            $this->db->select()->from($this::DB_TABLE)->where('id',$id)->order_by($sortBy,'desc');
            $result=$this->db->get();
            return $result->first_row('array');
        }
    }

    public function insert($data)
    {
        $this->db->insert($this::DB_TABLE,$data);
        return $this->db->insert_id();
    }

    public function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->set($data);
        $this->db->update($this::DB_TABLE);
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete($this::DB_TABLE);
    }
}
