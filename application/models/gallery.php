<?php

class Gallery extends CI_Model
{	
	
	function __construct() 
  	{
    /* Call the Model constructor */
    parent::__construct();
    
  	}
  	public function getAll()
	{
		$query = $this->db->select('*')->from('gallery')->get();
    	return $query->result();

	}
}