<?php

class Page extends CI_Model
{
    const DB_TABLE = "pages";
    const DB_TABLE_PK = "id";

    public function getPageInfo($page)
    {
        $this->db->select()->from($this::DB_TABLE)->where('title',$page);
        $result=$this->db->get();
        return $result->first_row('array');
    }

    public function updatePageData($title,$header,$body)
    {
        $this->db->where('title', $title);
        $this->db->set(array('header'=>$header,'body'=>$body));
        $this->db->update($this::DB_TABLE);
    }
}
