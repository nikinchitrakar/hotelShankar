<?php

class Login extends CI_Model
{
    const DB_TABLE="users";
    const DB_TABLE_PK="id";


    public function insert($data) {
        $result=$this->db->insert($this::DB_TABLE, $data);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
        $this->session->set_userdata("username",$data['username']);
        $this->session->set_userdata("email",$data['email']);
        $this->session->set_userdata("authority",$data['authority']);
        return $result;
    }

    public function isUserExist($email)
    {
        $this->db->select()->from($this::DB_TABLE)->where("email",$email);
        $query=$this->db->get();
        $data= $query->result_array();
        if(count($data)>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function getUserData($email,$pwd)
    {
       $this->db->select()->from($this::DB_TABLE)->where(array("email"=>$email, "password"=>$pwd));
       $query=$this->db->get();
       return $query->first_row("array");;
    }
}